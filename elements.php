<?php
    $elementSetMetadata = array(
        'name'        => 'Administrative Metadata',
        'description' => "CAVPP custom admin metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(
		// Internet Archive URL
		array(
            'label' => 'Internet Archive URL',
            'name'  => 'Internet Archive URL',
            /* 'description' => 'Internet Archive URL.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Object Identifier
		array(
            'label' => 'Object Identifier',
            'name'  => 'Object Identifier',
            /* 'description' => 'Object Identifier.', */
            'data_type'   => 'Tiny Text',
        ),

		// Project Identifier
		array(
            'label' => 'Project Identifier',
            'name'  => 'Project Identifier',
            /* 'description' => 'Project Identifier.', */
            'data_type'   => 'Tiny Text',
        ),

		// Asset Type
		array(
            'label' => 'Asset Type',
            'name'  => 'Asset Type',
            /* 'description' => 'Asset Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Object ARK
		array(
            'label' => 'Object ARK',
            'name'  => 'Object ARK',
            /* 'description' => 'Object ARK.', */
            'data_type'   => 'Tiny Text',
        ),

		// Institution ARK
		array(
            'label' => 'Institution ARK',
            'name'  => 'Institution ARK',
            /* 'description' => 'Institution ARK.', */
            'data_type'   => 'Tiny Text',
        ),
		
	);
