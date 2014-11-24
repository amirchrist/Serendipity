<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

// Here be dragons and NO application logic!

    $res = array();
    $res['personal'] =
             array('title' => USERCONF_CAT_PERSONAL,
                   'description' => USERCONF_CAT_PERSONAL_DESC,
                   'items' => array(array('var'         => 'username',
                                          'title'       => USERCONF_USERNAME,
                                          'description' => USERCONF_USERNAME_DESC,
                                          'type'        => 'string',
                                          'default'     => 'johndoe',
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'password',
                                          'title'       => USERCONF_PASSWORD,
                                          'description' => USERCONF_PASSWORD_DESC,
                                          'type'        => 'fullprotected',
                                          'default'     => '',
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'check_password',
                                          'title'       => USERCONF_CHECK_PASSWORD,
                                          'description' => USERCONF_CHECK_PASSWORD_DESC,
                                          'type'        => 'fullprotected',
                                          'default'     => '',
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'realname',
                                          'title'       => USERCONF_REALNAME,
                                          'description' => USERCONF_REALNAME_DESC,
                                          'type'        => 'string',
                                          'default'     => 'John Doe',
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'userlevel',
                                          'title'       => USERCONF_USERLEVEL,
                                          'description' => USERCONF_USERLEVEL_DESC . "\n" . USERLEVEL_OBSOLETE,
                                          'type'        => 'list',
                                          'default'     => $serendipity['permissionLevels'],
                                          'permission'  => 'personalConfigurationUserlevel',
                                          'view'        => 'dangerous'),

                                    array('var'         => 'groups',
                                          'title'       => USERCONF_GROUPS,
                                          'description' => USERCONF_GROUPS_DESC,
                                          'type'        => 'multilist',
                                          'permission'  => array('adminUsersMaintainOthers', 'adminUsersMaintainSame'),
                                          'perm_mode'   => 'or',
                                          'default'     => serendipity_getAllGroups(),
                                          'flags'       => array('groups'),
                                          'view'        => 'dangerous'),

                                    array('var'         => 'email',
                                          'title'       => USERCONF_EMAIL,
                                          'description' => USERCONF_EMAIL_DESC,
                                          'type'        => 'string',
                                          'default'     => 'john@example.com',
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'lang',
                                          'title'       => INSTALL_LANG,
                                          'description' => INSTALL_LANG_DESC,
                                          'type'        => 'list',
                                          'default'     => $serendipity['languages'],
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'wysiwyg',
                                          'title'       => INSTALL_WYSIWYG,
                                          'description' => INSTALL_WYSIWYG_DESC,
                                          'type'        => 'bool',
                                          'default'     => false,
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'wysiwygToolbar',
                                          'title'       => USERCONF_USE_CORE_WYSIWYG_TOOLBAR,
                                          'description' => USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC,
                                          'type'        => 'list',
                                          'permission'  => 'personalConfiguration',
                                          'default'     => array(
                                              'Default'  => USERCONF_WYSIWYG_PRESET_S9Y,
                                              'Basic'    => USERCONF_WYSIWYG_PRESET_BASIC,
                                              'Full'     => USERCONF_WYSIWYG_PRESET_FULL,
                                              'Standard' => USERCONF_WYSIWYG_PRESET_STANDARD,
                                              'CKE'      => USERCONF_WYSIWYG_PRESET_CKE,
                                              '----',
                                              'NOCC-Default'  => USERCONF_WYSIWYG_PRESET_NOCC_S9Y,
                                              'NOCC-Basic'    => USERCONF_WYSIWYG_PRESET_BASIC,
                                              'NOCC-Full'     => USERCONF_WYSIWYG_PRESET_FULL,
                                              'NOCC-Standard' => USERCONF_WYSIWYG_PRESET_STANDARD,
                                              'NOCC-CKE'      => USERCONF_WYSIWYG_PRESET_CKE
                                              ),
                                          'flags'       => array('config')),

                                    array('var'         => 'mail_comments',
                                          'title'       => USERCONF_SENDCOMMENTS,
                                          'description' => USERCONF_SENDCOMMENTS_DESC,
                                          'type'        => 'bool',
                                          'default'     => true,
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'mail_trackbacks',
                                          'title'       => USERCONF_SENDTRACKBACKS,
                                          'description' => USERCONF_SENDTRACKBACKS_DESC,
                                          'type'        => 'bool',
                                          'default'     => true,
                                          'permission'  => 'personalConfiguration'),

                                    array('var'         => 'no_create',
                                          'title'       => USERCONF_CREATE,
                                          'description' => USERCONF_CREATE_DESC,
                                          'type'        => 'bool',
                                          'default'     => false,
                                          'permission'  => 'personalConfigurationNoCreate',
                                          'flags'       => array('config'),
                                          'view'        => 'dangerous'),

                                    array('var'         => 'right_publish',
                                          'title'       => USERCONF_ALLOWPUBLISH,
                                          'description' => USERCONF_ALLOWPUBLISH_DESC,
                                          'type'        => 'bool',
                                          'default'     => true,
                                          'permission'  => 'personalConfigurationRightPublish',
                                          'view'        => 'dangerous'),

                                    array('var'         => 'simpleFilters',
                                          'title'       => SIMPLE_FILTERS,
                                          'description' => SIMPLE_FILTERS_DESC,
                                          'type'        => 'bool',
                                          'permission'  => 'personalConfiguration',
                                          'default'     => true,
                                          'flags'       => array('config')),


                                    array('var'         => 'enableBackendPopup',
                                          'title'       => INSTALL_BACKENDPOPUP,
                                          'description' => INSTALL_BACKENDPOPUP_DESC,
                                          'type'        => 'bool',
                                          'default'     => false,
                                          'flags'       => array('config'),
                                          'permission'  => 'personalConfiguration')
                            ));

    $res['defaults'] =
             array('title' => USERCONF_CAT_DEFAULT_NEW_ENTRY,
                   'description' => '',
                   'items' => array(
                                    array('var'         => 'moderateCommentsDefault',
                                          'title'       => COMMENTS_MODERATE,
                                          'description' => '',
                                          'type'        => 'bool',
                                          'default'     => false,
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'allowCommentsDefault',
                                          'title'       => COMMENTS_ENABLE,
                                          'description' => '',
                                          'type'        => 'bool',
                                          'default'     => true,
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'publishDefault',
                                          'title'       => NEW_ENTRY,
                                          'description' => '',
                                          'type'        => 'list',
                                          'default'     => array('publish' => PUBLISH, 'draft' => DRAFT),
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'showMediaToolbar',
                                          'title'       => SHOW_MEDIA_TOOLBAR,
                                          'description' => '',
                                          'type'        => 'bool',
                                          'default'     => false,
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),

                                    array('var'         => 'use_autosave',
                                          'title'       => CONF_USE_AUTOSAVE,
                                          'description' => CONF_USE_AUTOSAVE_DESC,
                                          'type'        => 'bool',
                                          'default'     => true,
                                          'permission'  => 'personalConfiguration',
                                          'flags'       => array('config')),
                            ));

    return $res;
