<?php

return [
    'plugin' => [
        'name' => 'Builder',
        'description' => 'Provides visual tools for building October plugins.',
        'add' => 'Create plugin',
        'no_records' => 'No plugins found',
        'no_description' => 'No description',
        'no_name' => 'No name',
        'search' => 'Search...',
        'filter_description' => 'Display all plugins or only your plugins.',
        'settings' => 'Settings',
        'entity_name' => 'Plugin',
        'field_name' => 'Name',
        'field_author' => 'Author',
        'field_description' => 'Description',
        'field_icon' => 'Plugin icon',
        'field_plugin_namespace' => 'Plugin namespace',
        'field_author_namespace' => 'Author namespace',
        'field_namespace_description' => 'Namespace can contain only Latin letters and digits and should start with a Latin letter.',
        'field_author_namespace_description' => 'You cannot change the namespaces with Builder after you create the plugin.',
        'tab_general' => 'General parameters',
        'tab_description' => 'Description',
        'field_homepage' => 'Plugin homepage URL',
        'no_description' => 'No description provided for this plugin',
        'error_settings_not_editable' => 'Settings of this plugin cannot be edited with Builder.'
    ],
    'author_name' => [
        'title' => 'Author name',
        'description' => 'Default author name to use for your new plugins. The author name is not fixed - you can change it in the plugins configuration at any time.'
    ],
    'author_namespace' => [
        'title' => 'Author namespace',
        'description' => 'If you develop for the Marketplace, the namespace should match the author code and cannot be changed. Refer to the documentation for details.'
    ],
    'database' => [
        'menu_label' => 'Database',
        'no_records' => 'No tables found',
        'search' => 'Search...',
        'confirmation_delete_multiple' => 'Do you really want to delete the selected tables?',
        'field_name' => 'Table name',
        'tab_columns' => 'Columns',
        'column_name_name' => 'Column',
        'column_name_required' => 'Please provide the column name',
        'column_name_type' => 'Type',
        'column_type_required' => 'Please select the column type',
        'column_name_length' => 'Length',
        'column_validation_length' => "The Length value should be integer or specified as precision and scale (10,2) for decimal columns. Spaces are not allowed in the length column.",
        'column_validation_title' => 'Only digits, lower-case Latin letters and underscores are allowed in column names',
        'column_name_unsigned' => 'Unsigned',
        'column_name_nullable' => 'Nullable',
        'column_auto_increment' => 'AUTOINCR',
        'column_default' => 'Default',
        'column_auto_primary_key' => 'PK',
        'tab_new_table' => 'New table',
        'btn_add_column' => 'Add column',
        'btn_delete_column' => 'Delete column',
        'confirm_delete' => 'Do you really want to delete the table?',
        'error_table_name_invalid_prefix' => "Table name should start with the plugin prefix: ':prefix'.",
        'error_table_name_invalid_characters' => 'Invalid table name. Table names should contain only Latin letters, digits and underscores. Names should start with a Latin letter and could not contain spaces.',
        'error_table_duplicate_column' => "Duplicate column name: ':column'.",
        'error_table_auto_increment_in_compound_pk' => 'An auto-increment column cannot be a part of a compound primary key.',
        'error_table_mutliple_auto_increment' => 'The table cannot contain multiple auto-increment columns.',
        'error_table_auto_increment_non_integer' => 'Auto-increment columns should have integer type.',
        'error_table_decimal_length' => "The Length parameter for :type type should be in format '10,2', without spaces.",
        'error_table_length' => 'The Length parameter for :type type should be specified as integer.',
        'error_unsigned_type_not_int' => "Error in the ':column' column. The Unsigned flag can be applied only to integer type columns.",
        'error_integer_default_value' => "Invalid default value for the integer column ':column'. The allowed formats are '10', '-10'.",
        'error_decimal_default_value' => "Invalid default value for the decimal or double column ':column'. The allowed formats are '1.00', '-1.00'.",
        'error_boolean_default_value' => "Invalid default value for the boolean column ':column'. The allowed values are '0' and '1'.",
        'error_unsigned_negative_value' => "The default value for the unsigned column ':column' can't be negative.",
        'error_table_already_exists' => "The table ':name' already exists in the database."
    ],
    'model' => [
        'menu_label' => 'Models',
        'entity_name' => 'Model',
        'no_records' => 'No models found',
        'search' => 'Search...',
        'add' => 'Add...',
        'forms' => 'Forms',
        'lists' => 'Lists',
        'field_class_name' => 'Class name',
        'field_database_table' => 'Database table',
        'error_class_name_exists' => 'Model file already exists for the specified class name: :path',
        'add_form' => 'Add form',
        'add_list' => 'Add list',
    ],
    'form' => [
        'saved'=> 'The form has been successfully saved.',
        'confirm_delete' => 'Do you really want to delete the form?',
        'tab_new_form' => 'New form',
        'property_label_title' => 'Label',
        'property_label_required' => 'Please specify the control label.',
        'property_span_title' => 'Span',
        'property_comment_title' => 'Comment',
        'property_comment_above_title' => 'Comment above',
        'property_default_title' => 'Default',
        'property_checked_default_title' => 'Checked by default',
        'property_css_class_title' => 'CSS class',
        'property_css_class_description' => 'Optional CSS class to assign to the field container.',
        'property_disabled_title' => 'Disabled',
        'property_hidden_title' => 'Hidden',
        'property_required_title' => 'Required',
        'property_field_name_title' => 'Field name',
        'property_placeholder_title' => 'Placeholder',
        'property_default_from_title' => 'Default from',
        'property_stretch_title' => 'Stretch',
        'property_stretch_description' => 'Specifies if this field stretches to fit the parent height.',
        'property_context_title' => 'Context',
        'property_context_description' => 'Specifies what form context should be used when displaying the field.',
        'property_context_create' => 'Create',
        'property_context_update' => 'Update',
        'property_context_preview' => 'Preview',
        'property_dependson_title' => 'Depends on',
        'property_trigger_action' => 'Action',
        'property_trigger_show' => 'Show',
        'property_trigger_hide' => 'Hide',
        'property_trigger_enable' => 'Enable',
        'property_trigger_disable' => 'Disable',
        'property_trigger_empty' => 'Empty',
        'property_trigger_field' => 'Field',
        'property_trigger_field_description' => 'Defines the other field name that will trigger the action.',
        'property_trigger_condition' => 'Condition',
        'property_trigger_condition_description' => 'Determines the condition the specified field should satisfy for the condition to be considered "true". Supported values: checked, unchecked, value[somevalue].',
        'property_trigger_condition_checked' => 'Checked',
        'property_trigger_condition_unchecked' => 'Unchecked',
        'property_trigger_condition_somevalue' => 'value[enter-the-value-here]',
        'property_preset_title' => 'Preset',
        'property_preset_description' => 'Allows the field value to be initially set by the value of another field, converted using the input preset converter.',
        'property_preset_field' => 'Field',
        'property_preset_field_description' => 'Defines the other field name to source the value from.',
        'property_preset_type' => 'Type',
        'property_preset_type_description' => 'Specifies the conversion type',
        'property_attributes_title' => 'Attributes',
        'property_attributes_description' => 'Custom HTML attributes to add to the form field element.',
        'property_container_attributes_title' => 'Container attributes',
        'property_container_attributes_description' => 'Custom HTML attributes to add to the form field container element.',
        'property_group_advanced' => 'Advanced',
        'property_dependson_description' => 'A list of other field names this field depends on, when the other fields are modified, this field will update.',
        'property_trigger_title' => 'Trigger',
        'property_trigger_description' => 'Allows to change elements attributes such as visibility or value, based on another elements\' state.',
        'property_default_from_description' => 'Takes the default value from the value of another field.',
        'property_field_name_required' => 'The field name is required',
        'property_field_name_regex' => 'The field name can contain only Latin letters, digits, underscores, dashes and square brackets.',
        'property_attributes_size' => 'Size',
        'property_attributes_size_tiny' => 'Tiny',
        'property_attributes_size_small' => 'Small',
        'property_attributes_size_large' => 'Large',
        'property_attributes_size_huge' => 'Huge',
        'property_attributes_size_giant' => 'Giant',
        'property_comment_position' => 'Comment position',
        'property_comment_position_above' => 'Above',
        'property_comment_position_below' => 'Below',
        'property_hint_path' => 'Hint partial path',
        'property_hint_path_description' => 'Path to a partial file that contains the hint text. Use the $ symbol to refer the plugins root directory, for example: $/acme/blog/partials/_hint.htm',
        'property_hint_path_required' => 'Please enter the hint partial path',
        'property_partial_path' => 'Partial path',
        'property_partial_path_description' => 'Path to a partial file. Use the $ symbol to refer the plugins root directory, for example: $/acme/blog/partials/_partial.htm',
        'property_partial_path_required' => 'Please enter the partial path',
        'property_code_language' => 'Language',
        'property_code_theme' => 'Theme',
        'property_theme_use_default' => 'Use default theme',
        'property_group_code_editor' => 'Code editor',
        'property_gutter' => 'Gutter',
        'property_gutter_show' => 'Visible',
        'property_gutter_hide' => 'Hidden',
        'property_wordwrap' => 'Word wrap',
        'property_wordwrap_wrap' => 'Wrap',
        'property_wordwrap_nowrap' => 'Don\'t wrap',
        'property_fontsize' => 'Font size',
        'property_codefolding' => 'Code folding',
        'property_codefolding_manual' => 'Manual',
        'property_codefolding_markbegin' => 'Mark begin',
        'property_codefolding_markbeginend' => 'Mark begin and end',
        'property_autoclosing' => 'Auto closing',
        'property_enabled' => 'Enabled',
        'property_disabled' => 'Disabled',
        'property_soft_tabs' => 'Soft tabs',
        'property_tab_size' => 'Tab size',
        'property_readonly' => 'Read only',
        'property_use_default' => 'Use default settings',
        'property_options' => 'Options',
        'property_prompt' => 'Prompt',
        'property_prompt_description' => 'Text to display for the create button.',
        'property_prompt_default' => 'Add new item',
        'property_available_colors' => 'Available colors',
        'property_available_colors_description' => 'List of available colors in hex format (#FF0000). Leave empty for the default color set. Enter one value per line.',
        'property_datepicker_mode' => 'Mode',
        'property_datepicker_mode_date' => 'Date',
        'property_datepicker_mode_datetime' => 'Date and time',
        'property_datepicker_mode_time' => 'Time',
        'property_datepicker_min_date' => 'Min date',
        'property_datepicker_min_date_description' => 'The minimum/earliest date that can be selected. Leave empty for the default value (2000-01-01).',
        'property_datepicker_max_date' => 'Max date',
        'property_datepicker_max_date_description' => 'The maximum/latest date that can be selected. Leave empty for the default value (2020-12-31).',
        'property_datepicker_date_invalid_format' => 'Invalid date format. Use format YYYY-MM-DD.',
        'property_markdown_mode' => 'Mode',
        'property_markdown_mode_split' => 'Split',
        'property_markdown_mode_tab' => 'Tab',
        'property_fileupload_mode' => 'Mode',
        'property_fileupload_mode_file' => 'File',
        'property_fileupload_mode_image' => 'Image',
        'property_group_fileupload' => 'File upload',
        'property_fileupload_prompt' => 'Prompt',
        'property_fileupload_prompt_description' => 'Text to display for the upload button, applies to File mode only, optional.',
        'property_fileupload_image_width' => 'Image width',
        'property_fileupload_image_width_description' => 'Optional parameter - images will be resized to this width. Applies to Image mode only.',
        'property_fileupload_invalid_dimension' => 'Invalid dimension value - please enter a number.',
        'property_fileupload_image_height' => 'Image height',
        'property_fileupload_image_height_description' => 'Optional parameter - images will be resized to this height. Applies to Image mode only.',
        'property_fileupload_file_types' => 'File types',
        'property_fileupload_file_types_description' => 'Optional comma separated list of file extensions that are accepted by the uploader. Eg: zip,txt',
        'property_fileupload_mime_types' => 'MIME types',
        'property_fileupload_mime_types_description' => 'Optional comma separated list of MIME types that are accepted by the uploader, either as file extensions or fully qualified names. Eg: bin,txt',
        'property_fileupload_use_caption' => 'Use caption',
        'property_fileupload_use_caption_description' => 'Allows a title and description to be set for the file.',
        'property_fileupload_thumb_options' => 'Thumbnail options',
        'property_fileupload_thumb_options_description' => 'Manages options for the automatically generated thumbnails. Applies only for the Image mode.',
        'property_fileupload_thumb_mode' => 'Mode',
        'property_fileupload_thumb_auto' => 'Auto',
        'property_fileupload_thumb_exact' => 'Exact',
        'property_fileupload_thumb_portrait' => 'Portrait',
        'property_fileupload_thumb_landscape' => 'Landscape',
        'property_fileupload_thumb_crop' => 'Crop',
        'property_fileupload_thumb_extension' => 'File extension',
        'property_name_from' => 'Name column',
        'property_name_from_description' => 'Relation column name to use for displaying a name.',
        'property_description_from' => 'Description column',
        'property_description_from_description' => 'Relation column name to use for displaying a description.',
        'property_recordfinder_prompt' => 'Prompt',
        'property_recordfinder_prompt_description' => 'Text to display when there is no record selected. The %s character represents the search icon. Leave empty for the default prompt.',
        'property_recordfinder_list' => 'List configuration',
        'property_recordfinder_list_description' => 'A reference to a list column definition file. Use the $ symbol to refer the plugins root directory, for example: $/acme/blog/lists/_list.yaml',
        'property_recordfinder_list_required' => 'Please provide a path to the list YAML file',
        'property_group_recordfinder' => 'Record finder',
        'property_mediafinder_mode' => 'Mode',
        'property_mediafinder_mode_file' => 'File',
        'property_mediafinder_mode_image' => 'Image',
        'property_mediafinder_prompt' => 'Prompt',
        'property_mediafinder_prompt_description' => 'Text to display when there is no item selected. The %s character represents the media manager icon. Leave empty for the default prompt.',
        'property_group_relation' => 'Relation',
        'property_relation_prompt' => 'Prompt',
        'property_relation_prompt_description' => 'Text to display when there is no available selections.',
        'control_group_standard' => 'Standard',
        'control_group_widgets' => 'Widgets',
        'click_to_add_control' => 'Add control',
        'loading' => 'Loading...',
        'control_text' => 'Text',
        'control_text_description' => 'Single line text box',
        'control_password' => 'Password',
        'control_password_description' => 'Single line password text field',
        'control_checkbox' => 'Checkbox',
        'control_checkbox_description' => 'Single checkbox',
        'control_switch' => 'Switch',
        'control_switch_description' => 'Single switchbox, an alternative for checkbox',
        'control_textarea' => 'Text area',
        'control_textarea_description' => 'Multiline text box with controllable height',
        'control_dropdown' => 'Dropdown',
        'control_dropdown_description' => 'Dropdown list with static or dynamic options',
        'control_unknown' => 'Unknown control type: :type',
        'control_repeater' => 'Repeater',
        'control_repeater_description' => 'Outputs a repeating set of form controls',
        'control_number' => 'Number',
        'control_number_description' => 'Single line text box that takes numbers only',
        'control_hint' => 'Hint',
        'control_hint_description' => 'Outputs a partial contents in a box that can be hidden by the user',
        'control_partial' => 'Partial',
        'control_partial_description' => 'Outputs a partial contents',
        'control_section' => 'Section',
        'control_section_description' => 'Displays a form section with heading and subheading',
        'control_radio' => 'Radio list',
        'control_radio_description' => 'A list of radio options, where only one item can be selected at a time',
        'control_radio_option_1' => 'Option 1',
        'control_radio_option_2' => 'Option 2',
        'control_checkboxlist' => 'Checkbox list',
        'control_checkboxlist_description' => 'A list of checkboxes, where multiple items can be selected',
        'control_codeeditor' => 'Code editor',
        'control_codeeditor_description' => 'Plaintext editor for formatted code or markup',
        'control_colorpicker' => 'Color picker',
        'control_colorpicker_description' => 'A field for selecting a hexadecimal color value',
        'control_datepicker' => 'Date picker',
        'control_datepicker_description' => 'Text field used for selecting date and times',
        'control_richeditor' => 'Rich editor',
        'control_richeditor_description' => 'Visual editor for rich formatted text, also known as a WYSIWYG editor',
        'control_markdown' => 'Markdown editor',
        'control_markdown_description' => 'Basic editor for Markdown formatted text',
        'control_fileupload' => 'File upload',
        'control_fileupload_description' => 'File uploader for images or regular files',
        'control_recordfinder' => 'Record finder',
        'control_recordfinder_description' => 'Field with details of a related record with the record search feature',
        'control_mediafinder' => 'Media finder',
        'control_mediafinder_description' => 'Field for selecting an item from the Media Manager library',
        'control_relation' => 'Relation',
        'control_relation_description' => 'Displays either a dropdown or checkbox list for selecting a related record',
        'error_file_name_required' => 'Please enter the form file name.',
        'error_file_name_invalid' => 'The file name can contain only Latin letters, digits, underscores, dots and hashes.',
        'span_left' => 'Left',
        'span_right' => 'Right',
        'span_full' => 'Full',
        'span_auto' => 'Auto',
        'empty_tab' => 'Empty tab',
        'confirm_close_tab' => 'The tab contains controls which will be deleted. Continue?',
        'tab' => 'Form tab',
        'tab_title' => 'Title',
        'controls' => 'Controls',
        'property_tab_title_required' => 'The tab title is required.',
        'tabs_primary' => 'Primary tabs',
        'tabs_secondary' => 'Secondary tabs',
        'tab_stretch' => 'Stretch',
        'tab_stretch_description' => 'Specifies if this tabs container stretches to fit the parent height.',
        'tab_css_class' => 'CSS class',
        'tab_css_class_description' => 'Assigns a CSS class to the tabs container.',
        'tab_name_template' => 'Tab %s',
        'tab_already_exists' => 'Tab with the specified title already exists.'
    ],
    'list' => [
        'tab_new_list' => 'New list',
        'saved'=> 'The list has been successfully saved.',
        'confirm_delete' => 'Do you really want to delete the list?',
        'tab_columns' => 'Column',
        'btn_add_column' => 'Add column',
        'btn_delete_column' => 'Delete column',
        'column_dbfield_label' => 'Field',
        'column_dbfield_required' => 'Please enter the model field',
        'column_name_label' => 'Label',
        'column_label_required' => 'Please provide the column label',
        'column_type_label' => 'Type',
        'column_type_required' => 'Please provide the column type',
        'column_type_text' => 'Text',
        'column_type_number' => 'Number',
        'column_type_switch' => 'Switch',
        'column_type_datetime' => 'Datetime',
        'column_type_date' => 'Date',
        'column_type_time' => 'Time',
        'column_type_timesince' => 'Tine since',
        'column_type_timetense' => 'Tine tense',
        'column_type_select' => 'Select',
        'column_type_partial' => 'Partial',
        'column_label_default' => 'Default',
        'column_label_searchable' => 'Search',
        'column_label_sortable' => 'Sort',
        'column_label_invisible' => 'Invisible',
        'column_label_select' => 'Select',
        'column_label_relation' => 'Relation',
        'column_label_css_class' => 'CSS class',
        'column_label_width' => 'Width',
        'column_label_path' => 'Path',
        'column_label_format' => 'Format',
        'column_label_value_from' => 'Value from',
        'error_duplicate_column' => "Duplicate column field name: ':column'."
    ],
    'controller' => [
        'menu_label' => 'Controllers'
    ],
    'version' => [
        'menu_label' => 'Versions'
    ],
    'menu' => [
        'menu_label' => 'Backend Menu',
        'tab' => 'Menus',
        'saved' => 'The menus have been successfully saved.',
        'add_main_menu_item' => 'Add main menu item'
    ],
    'localization' => [
        'menu_label' => 'Localization'
    ],
    'permission' => [
        'menu_label' => 'Permissions',
        'tab' => 'Permissions',
        'form_tab_permissions' => 'Permissions',
        'btn_add_permission' => 'Add permission',
        'btn_delete_permission' => 'Delete permission',
        'column_permission_label' => 'Permission code',
        'column_permission_required' => 'Please enter the permission code',
        'column_tab_label' => 'Tab title',
        'column_tab_required' => 'Please enter the permission tab title',
        'column_label_label' => 'Label',
        'column_label_required' => 'Please enter the permission label',
        'saved' => 'The permissions have been successfully saved.',
        'error_duplicate_code' => "Duplicate permission code: ':code'."
    ],
    'yaml' => [
        'save_error' => "Error saving file ':name'. Please check write permissions."
    ],
    'common' => [
        'error_file_exists' => "File already exists: ':path'.",
        'field_icon_description' => 'October uses Font Autumn icons: http://daftspunk.github.io/Font-Autumn/',
        'destination_dir_not_exists' => "The destination directory doesn't exist: ':path'.",
        'error_make_dir' => "Error creating directory: ':name'.",
        'error_dir_exists' => "Directory already exists: ':path'.",
        'template_not_found' => "Template file is not found: ':name'.",
        'error_generating_file' => "Error generating file: ':path'.",
        'error_loading_template' => "Error loading template file: ':name'.",
        'select_plugin_first' => 'Please select a plugin first. To see the plugin list click the > icon on the left sidebar.',
        'plugin_not_selected' => 'Plugin is not selected',
        'add' => 'Add'
    ],
    'migration' => [
        'entity_name' => 'Migration',
        'error_version_invalid' => 'The version should be specified in format 1.0.1',
        'field_version' => 'Version',
        'field_description' => 'Description',
        'field_code' => 'Code',
        'field_code_comment' => 'The migration code is read-only and for the preview purpose only. You can create custom migrations manually in the Versions section of the Builder.',
        'save_and_apply' => 'Save & Apply',
        'error_version_exists' => 'The migration version already exists.',
        'error_script_filename_invalid' => 'The migration script file name can contain only Latin letters, digits and underscores. The name should start with a Latin letter and could not contain spaces.',
        'no_changes_to_save' => 'There are no changes to save.',
    ]
];