<?
c("fmMain->TreeProject")->onDblClick = create_function('$self', 'global $projectFile;
$self = c("fmMain->TreeProject");
switch( fileExt($self->itemSelected) )
{
	
	case "dfm":
		myUtils::loadForm( basenameNoExt($self->itemSelected));
	break;
	
	case "php":
		run(dirname($projectFile)."/scripts/".$self->itemSelected);
	break;
	
	case "dll":
	//null
	break;
	
}
');

c("fmMain->TreeProject")->onClick = create_function('$self','global $_FORMS, $formSelected, $_sc;
$self = c("fmMain->TreeProject");
$arr_self = $self->__arrObjSelf;
$obj_self = $arr_self[$self->absIndex];
if(!empty($obj_self))
{
	if(!is_object(c($obj_self))) return;
	foreach( myUtils::$forms as $name=>$form ){
		if( $form->self == c($obj_self)->owner ){
			if( strtolower($_FORMS[$formSelected]) == $name )
			{
				$_sc->clearTargets();
				$_sc->addTarget(c($obj_self));
			} else {
				myUtils::loadForm($name);
				$_sc->clearTargets();
				$_sc->addTarget(c($obj_self));
			}
		}
	}
}');