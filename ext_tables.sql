#
# Table structure for table 'tx_slubprofilemessages_domain_model_message'
#
CREATE TABLE tx_slubprofilemessages_domain_model_message (
    uid int(11) unsigned DEFAULT 0 NOT NULL auto_increment,
    pid int(11) DEFAULT 0 NOT NULL,

    title varchar(255) NOT NULL,
    content text,
    categories int(11) unsigned DEFAULT 0 NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,
    sys_language_uid int(11) DEFAULT 0 NOT NULL,
    l18n_parent int(11) DEFAULT 0 NOT NULL,
    l18n_diffsource mediumblob NOT NULL,
    fe_group int(11) DEFAULT 0 NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'sys_category'
#
CREATE TABLE sys_category (
    tx_slubprofilemessages_code varchar(255) DEFAULT '' NOT NULL,
);

