<?php
    // ====================== PATHS ===========================
	define ('DS'				, DIRECTORY_SEPARATOR);
	define ('ROOT_PATH'			, dirname(__FILE__));						// Định nghĩa đường dẫn đến thư mục gốc
	define ('LIBRARY_PATH'		, ROOT_PATH . DS . 'libs' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('CONTROLLER_PATH'	, ROOT_PATH . DS . 'controllers' . DS);		// Định nghĩa đường dẫn đến thư mục controllers
	define ('MODEL_PATH'		, ROOT_PATH . DS . 'models' . DS);			// Định nghĩa đường dẫn đến thư mục models
	define ('VIEW_PATH'			, ROOT_PATH . DS . 'views' . DS);			// Định nghĩa đường dẫn đến thư mục views
	define ('PUBLIC_PATH'		, ROOT_PATH . DS . 'public' . DS);			// Định nghĩa đường dẫn đến thư mục public							
    
    // ====================== URL ===========================
	define	('ROOT_URL'			, DS . 'MyWeb');
	define	('PUBLIC_URL'		, ROOT_URL . DS . 'public' . DS);
    define	('VIEW_URL'			, ROOT_URL . DS . 'views' . DS);
    
    // ====================== DATABASE ===========================
    define  ("ROOT_HOST"        , "localhost");
    define  ("ROOT_USER"        , "root");
    define  ("ROOT_PASS"        , "");
    define  ("ROOT_DB"          , "db_mvc_qltruonghoc");
?>