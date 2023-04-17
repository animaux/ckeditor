<?php

	require_once('default.ckeditor.php');

	Class formatterckeditor_abnormal extends DefaultTextFormatter {
		public function about(){
			$about = parent::about();
			$about['name'] = 'CKEditor : Abnormal';
			return $about;
		}
	}

