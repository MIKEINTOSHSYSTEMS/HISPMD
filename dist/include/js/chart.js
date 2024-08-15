
function createChart(chartParams){if(typeof anychart==="undefined"){return;}
anychart.licenseKey('xlinesoft-9faa5dd-332123fd');_createChart(chartParams);}
function _createChart(chartParams){$.get(chartParams.xmlFile,function(data){var chart,gwidth,i;if(data.gauge){gwidth=Math.round(chartParams.width/data.gauge.length);for(i=0;i<data.gauge.length;i++){$('<div style="float:left; width:'+gwidth+'px; height:'+chartParams.height+'px;" id="'+chartParams.containerId+'g'+i+'"></div>').appendTo($("#"+chartParams.containerId));setupChart(data.gauge[i],{height:chartParams.height,refreshTime:chartParams.refreshTime,containerId:chartParams.containerId+'g'+i,width:gwidth,chartName:chartParams.chartName,seriaNum:i,chartType:'Gauge'});}
return;}
chart=setupChart(data,chartParams);},'json');}
function setupChart(data,chartParams){if(typeof anychart==="undefined"){return;}
var chart=anychart.fromJson(data),credits;if(chartParams.settings){if(typeof chart.getSeriesAt=='function')
{for(i=0;i<chartParams.settings.seriesColor.length;++i)
chart.getSeriesAt(i).color('#'+chartParams.settings.seriesColor[i],1);}}
chart.width=chartParams.width;chart.height=chartParams.height;chart.wMode='opaque';chart.id='chart_'+chartParams.chartName;if(data.gauge){chart.id+='g'+chartParams.seriaNum;}
if(!data.gauge){credits=chart.credits();credits.enabled(false);}
chart.container(chartParams.containerId);if(data.chart&&data.chart.tooltipExtra&&data.chart.singleSeries){chart.tooltip().textFormatter(function(){return this.value+data.chart.tooltipExtra;});}
chart.draw();if(chartParams.refreshTime){chart.reloadIntervalId=setInterval(function(){updateChart(chart,chartParams);},chartParams.refreshTime*1000);}
return chart;}
function updateChart(chart,chartParams){var params={action:'refresh',rndval:Math.random(),cname:chartParams.chartName};$.post("dchartdata.php",params,function(json){var i,masterData,series=JSON.parse(json);if(chartParams.chartType==='Gauge'){chart.data(anychart.data.set(series[chartParams.seriaNum].data));}else{chart.removeAllSeries();for(i=0;i<series.length;i++){chart.addSeries(series[i].data);}}
chart.draw();});}