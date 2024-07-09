<?php
##if @TABLE.nType==titTABLE || @TABLE.nType==titVIEW##
$tdata##@TABLE.strShortTableName##[".pageSize"]=##@TABLE.nNumberOfRecords##;
##endif##

##if TableBasedEntity( @TABLE )##
	##foreach @TABLE.arrOrderIndexes as @o order @o.nOrderIndex##
$tdata##@TABLE.strShortTableName##[".orderindexes"][] = array(##@o.nIndex##, (##@o.bAsc## ? "ASC" : "DESC"), "##@o.strOrderField s##");
	##endfor##
##endif##

##if TableBasedEntity( @TABLE )##
/* 
 ##@TABLE.strSQL##
 */
$query = new SQLQuery(...);
##endif##

$table = "##@TABLE.strShortTableName##";
?>
