<?php
/**
* File with yii debug toolbar component class 
* @author zadoev@gmail.com 
*/ 

/**
* Class YiiDebugToolbarManager is component which allow to  manage yii debug toolar output
* 
* configuring: 
* Add folow strings into config 
* <code>
* 	'components' => array(
* 	// ... 
*		'debugToolbarManager' => array(
*			'class' => 'ext.yiidebugtb.YiiDebugToolbarManager', 
*		), 
*	// ...
* </code> 
* 
* In any controller where you need to turn off yiidebugtb output you can write 
* <code>
* public function actionAnyController()
* {
*	if ( Yii::app()->hasComponent('debugToolbarManager') ) 
*		Yii::app()->debugToolbarManager->disableOutput(); // it will disable yiidebugtb output
*	// code
* } 
* </code>
*/
class YiiDebugToolbarManager extends CComponent
{
	public $outputAllowed = true; 
	
	public function disableOutput()
	{
		$this->outputAllowed = false; 
	}
	public function init()
	{
		
	}
}
