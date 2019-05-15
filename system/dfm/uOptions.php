<?php
class ev_fmOptions_c_showgrid {
	static function onClick($self){
		global $_sc;
		$_sc->showGrid = c($self)->checked;
		c('fmEdit')->repaint();
	}
}

class ev_fmOptions_e_gridsize {
	static function onChange($self){
		global $_sc;
		c('fmOptions->up_gridsize')->position = (int)c($self)->text;
		if( c('fmOptions->c_showgrid')->checked ) {
			$_sc->gridSize = c('fmOptions->up_gridsize')->position;
			c('fmEdit')->repaint();
		}
	}
}

class ev_fmOptions_up_gridsize {
	static function onClick($self){
		global $_sc;
		c('fmOptions->e_gridsize')->text = c($self)->position;
		if( c('fmOptions->c_showgrid')->checked ) {
			$_sc->gridSize = c($self)->position;
			c('fmEdit')->repaint();
		}
	}
}

class ev_fmOptions_cb_penstyle {
	static function onSelect($self){
		c('fmMain->shapeSize')->penStyle = c('fmOptions->cb_penstyle')->itemIndex;
	}
}

class ev_fmOptions_en_bc {
	static function doDialog($self, $obj=false, $prop=false)
	{
		$dlg = new TDMSColorDialog();
		$col1 = $dlg->color = c($self)->brushColor;
		if( file_exists(realpath(SYSTEM_DIR.'/colors.in')) )
		{
			list($dlg->MainColors->text, $dlg->CustomColors->text) = unserialize(file_get_contents(realpath(SYSTEM_DIR.'/colors.in')));
		}
		if($dlg->execute())
		{
			if( is_object($obj) ) $obj->$prop = $dlg->color;
			c($self)->brushColor = $dlg->color;
			c($self)->penColor = TColor::compare_contrast($col1, $dlg->color);
			file_put_contents(SYSTEM_DIR.'/colors.in', serialize(array($dlg->MainColors->text, $dlg->CustomColors->text)));
		}
		$dlg->free();
	}
	static function onMouseDown($self, $button, $shift, $x, $y)
	{
		global $_sc;
		self::doDialog($self, $_sc, 'BtnColor');
	}
}

class ev_fmOptions_dis_bc {
	static function onMouseDown($self, $button, $shift, $x, $y){
		global $_sc;
		ev_fmOptions_en_bc::doDialog($self, $_sc, 'BtnColorDisabled');
	}
}

class ev_fmOptions_sel_color {
	static function onMouseDown($self, $button, $shift, $x, $y)
	{
		ev_fmOptions_en_bc::doDialog($self);
	}
}

class ev_fmOptions_scol_inn
 {
	static function onMouseDown($self, $button, $shift, $x, $y)
	{
		ev_fmOptions_en_bc::doDialog($self, c("fmMain->shapeSize"), "brushColor");
		c("fmMain->shapeSize")->repaint();
	}
}

class ev_fmOptions_scol_out
 {
	static function onMouseDown($self, $button, $shift, $x, $y)
	{
		ev_fmOptions_en_bc::doDialog($self, c("fmMain->shapeSize"), "penColor");
		c("fmMain->shapeSize")->repaint();
	}
}