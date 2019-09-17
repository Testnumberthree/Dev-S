<?
$result = [];

$result[] = array('CAPTION'=>t('Text'),'TYPE'=>'text','PROP'=>'caption');
_addfont($result);
$result[] = array('CAPTION'=>t('Color'),'TYPE'=>'color','PROP'=>'color');
$result[] = array('CAPTION'=>t('Auto Size'),'TYPE'=>'check','PROP'=>'autoSize');
$result[] = array('CAPTION'=>t('Align'),'TYPE'=>'combo','PROP'=>'alignment','VALUES'=>array('taLeftJustify', 'taRightJustify', 'taCenter'));
$result[] = array('CAPTION'=>t('Valign'),'TYPE'=>'combo','PROP'=>'layout','VALUES'=>array('tlTop', 'tlCenter', 'tlBottom'));
$result[] = array('CAPTION'=>t('Transparent'),'TYPE'=>'check','PROP'=>'transparent');
$result[] = array('CAPTION'=>t('Word Wrap'),'TYPE'=>'check','PROP'=>'wordWrap');
$result[] = array('CAPTION'=>t('Hint'),'TYPE'=>'text','PROP'=>'hint');

$result[] = array('CAPTION'=>t('Align'),'TYPE'=>'combo','PROP'=>'align','VALUES'=>$_c->s('TAlign'),'ADD_GROUP'=>true);

$result[] = array('CAPTION'=>t('Cursor'),'TYPE'=>'combo','PROP'=>'cursor','VALUES'=>$GLOBALS['cursors_meta'],'ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Sizes and position'),'TYPE'=>'sizes','PROP'=>'','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Enabled'),'TYPE'=>'check','PROP'=>'aenabled','REAL_PROP'=>'enabled','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('visible'),'TYPE'=>'check','PROP'=>'avisible','REAL_PROP'=>'visible','ADD_GROUP'=>true);

$result[] = array('CAPTION'=>t('Active'),'TYPE'=>'check','PROP'=>'active','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Left Direction'),'TYPE'=>'check','PROP'=>'leftDirection','ADD_GROUP'=>true);
$result[] = array('CAPTION'=>t('Interval (ms)'), 'PROP'=>'IntervalTimer', 'TYPE'=>'number','ADD_GROUP'=>1);

return $result;