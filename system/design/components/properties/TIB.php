<?

/* xsnakes */
/* TIB v1.3*/

$result = [];


$result[] = array(
                  'CAPTION'=>t('Align'),
                  'TYPE'=>'combo',
                  'PROP'=>'align',
                  'VALUES'=>$_c->s('TAlign'),
                   'ADD_GROUP'=>true
                  );
$result[] = array(
                  'CAPTION'=>t('apr_style'),
                  'TYPE'=>"tib",
                  'PROP'=>"images",
                  );
$result[] = array(
                  'CAPTION'=>t('State'),
                  'TYPE'=>'number',
                  'PROP'=>'state',
                  );
$result[] = array(
                  'CAPTION'=>t('State Offset'),
                  'TYPE'=>'number',
                  'PROP'=>'offset',
                  );
$result[] = array(
                  'CAPTION'=>t('Auto State'),
                  'TYPE'=>'check',
                  'PROP'=>'autoState',
                  );
$result[] = array(
                  'CAPTION'=>t('Auto Size'),
                  'TYPE'=>'check',
                  'PROP'=>'autoSize',
                  );
$result[] = array(
                  'CAPTION'=>t('Center'),
                  'TYPE'=>'check',
                  'PROP'=>'center',
                  );
$result[] = array(
                  'CAPTION'=>t('Mosaic'),
                  'TYPE'=>'check',
                  'PROP'=>'mosaic',
                  );
$result[] = array(
                  'CAPTION'=>t('Proportional'),
                  'TYPE'=>'check',
                  'PROP'=>'proportional',
                  );
$result[] = array(
                  'CAPTION'=>t('Stretch'),
                  'TYPE'=>'check',
                  'PROP'=>'stretch',
                  );
$result[] = array(
                  'CAPTION'=>t('transparent'),
                  'TYPE'=>'check',
                  'PROP'=>'transparent',
                  );
$result[] = array(
                  'CAPTION'=>t('Increment Display'),
                  'TYPE'=>'check',
                  'PROP'=>'incrementDisplay',
                  );
$result[] = array(
                  'CAPTION'=>t('modal_result'),
                  'TYPE'=>'combo',
                  'PROP'=>'modalResult',
                  'VALUES'=>array(
                                  mrNone=>'mrNone',
                                  mrOk=>'mrOk',
                                  mrCancel=>'mrCancel',
                                  mrAbort=>'mrAbort',
                                  mrRetry=>'mrRetry',
                                  mrIgnore=>'mrIgnore',
                                  mrYes=>'mrYes',
                                  mrNo=>'mrNo',
                                  mrAll=>'mrAll',
                                  mrNoToAll=>'mrNoToAll',
                                  mrYesToAll=>'mrYesToAll'
                                  ),
                  );
$result[] = array(
                  'CAPTION'=>t('Hint'),
                  'TYPE'=>'text',
                  'PROP'=>'hint',
                  );
$result[] = array(
                  'CAPTION'=>t('Show Hint'),
                  'TYPE'=>'check',
                  'PROP'=>'showHint',
                  );
				  
$result[] = array(
                  'CAPTION'=>t('Parent Hint'),
                  'TYPE'=>'check',
                  'PROP'=>'parentCustomHint',
                  );
$result[] = array(
                  'CAPTION'=>t('Parent Show Hint'),
                  'TYPE'=>'check',
                  'PROP'=>'parentShowHint',
                  );

$result[] = array(
                  'CAPTION'=>t('Cursor'),
                  'TYPE'=>'combo',
                  'PROP'=>'cursor',
                  'VALUES'=>$GLOBALS['cursors_meta'],
                  'ADD_GROUP'=>true,
                  );

$result[] = array(
                  'CAPTION'=>t('Sizes and position'),
                  'TYPE'=>'sizes',
                  'PROP'=>'',
                  'ADD_GROUP'=>true,
                  );

$result[] = array(
                  'CAPTION'=>t('Enabled'),
                  'TYPE'=>'check',
                  'PROP'=>'enabled',
                  'REAL_PROP'=>'enabled',
                  'ADD_GROUP'=>true,
                  );

$result[] = array(
                  'CAPTION'=>t('visible'),
                  'TYPE'=>'check',
                  'PROP'=>'avisible',
                  'REAL_PROP'=>'visible',
                  'ADD_GROUP'=>true,
                  );
return $result;