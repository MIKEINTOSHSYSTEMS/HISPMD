<?php
class ViewMapField extends ViewControl
{
	public function showDBValue( &$data, $keylink, $html = true )
	{
		if( !$this->pageObject ) 
			return runner_htmlspecialchars( $data[ $this->field ] );
 	
		if( $this->pageObject->pageType == PAGE_EXPORT 
			|| ($this->pageObject->pageType == PAGE_RPRINT && $this->container->forExport == "excel") ) {
			return runner_htmlspecialchars( $data[ $this->field ] );
 		}

		$mapId = 'littleMap_'.GoodFieldName( $this->field ).'_'.$this->pageObject->recId;
		
		if( $this->pageObject->pageType != PAGE_LIST )
			$mapData = $this->pageObject->addGoogleMapData( $this->field, $data );
		else
			$mapData = &$this->pageObject->googleMapCfg['mapsData'][ $mapId ];		

		if( $this->pageObject->pageType != PAGE_PRINT && $this->pageObject->pageType != PAGE_MASTER_INFO_PRINT 
				&& $this->pageObject->pageType != PAGE_RPRINT && $this->pageObject->pageType != PAGE_REPORT 
						&& !($this->pageObject->mode == VIEW_SIMPLE && $this->pageObject->pdfMode) ) {
			return $this->getFieldMap( $mapData, $mapId );
		}

		return $this->getMapImage( $mapData );
	}
	
	
	protected function getFieldMap( &$mapData, $mapId ) {
		$width = 300;
		if( isset( $this->pageObject->googleMapCfg['fieldsAsMap'] ) )
			$width = $this->pageObject->googleMapCfg['fieldsAsMap'][ $this->field ]['width'];
		
		$height = 225;
		if( isset( $this->pageObject->googleMapCfg['fieldsAsMap'] ) )
			$height = $this->pageObject->googleMapCfg['fieldsAsMap'][ $this->field ]['height'];
		
		if( GetGlobalData("useEmbedMapsAPI", false) && getMapProvider() == GOOGLE_MAPS ) {
			$mapData["skipped"] = true;
			
			$q = $this->getPlaceDefinition( $mapData );
			if( !$q )
				return '';
			
			$src = 'https://www.google.com/maps/embed/v1/place?q='.$q.'&zoom='.$mapData['zoom']
				.'&key='.$this->pageObject->googleMapCfg["APIcode"];
			
			return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" style="border:0"
				src="'.$src.'" allowfullscreen></iframe>';
		}
		
		return '<div id="'.$mapId.'" style="width:'.$width.'px; height:'.$height.'px;" data-gridlink class="littleMap">'
			.'</div>';	
	
	}

	/**
	 * @return String
	 */
	function getPlaceDefinition( &$mapData ) {
		$markerData = $mapData['markers'][0];
		if( $markerData['lat'] == '' && $markerData['lng'] == '' )
			return $markerData['address'];
		
		return $markerData['lat'].','.$markerData['lng'];	
	}
	
	/**
	 * @return String
	 */
	function getLocation( $markerData )
	{
		if( $markerData['lat'] == "" && $markerData['lng'] == "" )
		{
			if( !$markerData['address'] )
				return '';

			if ( getMapProvider() == GOOGLE_MAPS )
				return $markerData['address'];

			$locationByAddress = getLatLngByAddr( $markerData['address'] );
			return $locationByAddress['lat'].','.$locationByAddress['lng'];
		}

		return $markerData['lat'].','.$markerData['lng'];
	}

	/**
	 * @return String
	 */
	protected function getMapImage( &$mapData ) {
		$markerData = $mapData['markers'][0];

		return '<img border="0" alt="" 
			src="'.$this->getStaticMapURL( $this->getLocation( $markerData ), $mapData['zoom'], $markerData['mapIcon'] ).'">';		
	}

	/**
	 * @return String
	 */
	function getStaticMapURL( $location, $zoom, $icon )
	{
		$markerLocation = $location;
		$apiKey = $this->pageObject->googleMapCfg["APIcode"];

		$width = "300";
		$height = "225";

		if( isset($this->pageObject->googleMapCfg['fieldsAsMap'] ) )
		{
			$width = $this->pageObject->googleMapCfg['fieldsAsMap'][ $this->field ]['width'];
			$height = $this->pageObject->googleMapCfg['fieldsAsMap'][ $this->field ]['height'];
		}

		switch( getMapProvider() )
		{
			case GOOGLE_MAPS:
				global $showCustomMarkerOnPrint;

				if( $icon && $showCustomMarkerOnPrint )
				{
					$here = request_protocol() . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					$pos = strrpos($here, '/');
					$here = substr($here, 0, $pos)."/images/menuicons/".$icon;

					$markerLocation = "icon:".$here."|".$location;
				}

				return 'https://maps.googleapis.com/maps/api/staticmap?center='.$location.
					'&zoom='.$zoom.'&size='.$width.'x'.$height.'&maptype=mobile&markers='.$markerLocation.'&key='.$apiKey;

			case OPEN_STREET_MAPS:
				return 'https://staticmap.openstreetmap.de/staticmap.php?center='.$location.
					'&zoom='.$zoom.'&size='.$width.'x'.$height.'&maptype=mobile&markers='.$markerLocation. ',ol-marker';

			case BING_MAPS:
				return 'https://dev.virtualearth.net/REST/v1/Imagery/Map/Road/'.$location.'/'
					.$zoom.'?mapSize='.$width.','.$height.'&pp='.$markerLocation.';63;&key='.$apiKey;
					
			case HERE_MAPS:
				return 'https://image.maps.ls.hereapi.com/mia/1.6/mapview?'
					.'apiKey='.$apiKey
					.'&z='.$zoom
					.'&c='.$location
					.'&w='.$width
					.'&h='.$height;
					
			case MAPQUEST_MAPS:
				return 'https://www.mapquestapi.com/staticmap/v5/map?'
					.'key='.$apiKey
					.'&zoom='.$zoom
					.'&locations='.$location
					.'&size='.$width.','.$height;

			default:
				return '';
		}
	}

	public function getPdfValue( &$data, $keylink = "" )
	{
		$mapData = $this->pageObject->addGoogleMapData( $this->field, $data );

		$location = $this->getLocation( $mapData['markers'][0] );
		$staticUrl = $this->getStaticMapURL( $location, $mapData['zoom'], $mapData['markers'][0]['mapIcon'] );

		$content = myurl_get_contents_binary( $staticUrl );

		$imageType = SupposeImageType( $content );
		if( $imageType == "image/jpeg" || $imageType == "image/png" )
		{
			return '{
				image: "' . jsreplace( 'data:'. $imageType . ';base64,' . base64_bin2str( $content ) ) . '",
			}';
		}

		return '""';
	}
}
?>