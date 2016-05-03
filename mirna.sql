MySQL Commands:
# create database:
create database mirna;

#TABLE: smrna_info
create table smrna_info (smrna_id VARCHAR(50) PRIMARY KEY NOT NULL, seq_5p VARCHAR(255),seq_3p VARCHAR(255),seq_precursor LONGBLOB,length INT(10),species VARCHAR(50),chromosome VARCHAR(20),chr_arm VARCHAR(20),chr_stop VARCHAR(50),family VARCHAR(50),reference VARCHAR(255));

#TABLE: experiment
create table experiment(experiment_id INT(20)PRIMARY KEY NOT NULL,array_exp_ID VARCHAR(255),smrna_id VARCHAR(50),GEO_ID VARCHAR(255),exp_name VARCHAR(255),exp_type VARCHAR(250),exp_ref VARCHAR(250));

set foreign_key_checks=0;
alter table experiment add FOREIGN KEY FK_experiment(smrna_id) REFERENCES smrna_info(smrna_id);

#TABLE:sample
create table sample(sample_id INT(10)PRIMARY KEY NOT NULL,experiment_id INT(20),filename VARCHAR(100),description VARCHAR(250),filesize VARCHAR(128),total_reads INT(20));
set foreign_key_checks=0;
alter table sample add FOREIGN KEY FK_sample(experiment_id) REFERENCES experiment(experiment_id);

#TABLE:comparison
create table comparison(comp_id VARCHAR(50)PRIMARY KEY NOT NULL, experiment_id INT(20),comp_desc VARCHAR(255),comp_type VARCHAR(255));
set foreign_key_checks=0;
alter table comparison add FOREIGN KEY FK_comparison(experiment_id) REFERENCES experiment(experiment_id);

#TABLE:differential_exp
create table differential_exp(DE_id INT(10)PRIMARY KEY NOT NULL,smrna_id VARCHAR(50),comp_id VARCHAR(50),LogFc DECIMAL(5,3),Pvalue DECIMAL(5,3),adj_P_value DECIMAL(5,3),statistics VARCHAR(255));
set foreign_key_checks=0;
alter table differential_exp add FOREIGN KEY FK_differential_exp(smrna_id) REFERENCES smrna_info(smrna_id);
alter table differential_exp add FOREIGN KEY DK_differential_exp(experiment_id) REFERENCES experiment(experiment_id);

#TABLE:raw_exp
create table raw_exp(smrna_id varchar(50),sample_id INT(10) ,experiment_id INT(10), raw_exp DECIMAL(5,3),normalised_exp  DECIMAL(5,3));
set foreign_key_checks=0;
alter table raw_exp add FOREIGN KEY FK_raw_exp(smrna_id) REFERENCES smrna_info(smrna_id);
alter table raw_exp add FOREIGN KEY DK_raw_exp(experiment_id) REFERENCES experiment(experiment_id);
alter table raw_exp add FOREIGN KEY SK_raw_exp(sample_id) REFERENCES sample(sample_id);

#TABLE: target_info
create table target_info(target_id INT(10) PRIMARY KEY NOT NULL,target_name VARCHAR(50),target_desc VARCHAR(50),target_length INT(10),target_chr VARCHAR(50), tar_chr_position VARCHAR(50),target_seq_N LONGBLOB,target_seq_P LONGBLOB));

#TABLE: targets
create table targets(smrna_id VARCHAR(50), experiment_id INT(10), comp_id VARCHAR(50),DE_id INT(10), target_id INT(10),alignment VARCHAR(255),method VARCHAR(255));
alter table targets add FOREIGN KEY FK_targets(smrna_id) REFERENCES smrna_info(smrna_id);
alter table targets add FOREIGN KEY DK_targets(experiment_id) REFERENCES experiment(experiment_id);
alter table targets add FOREIGN KEY CK_targets(comp_id) REFERENCES comparison(comp_id);
alter table targets add FOREIGN KEY EK_targets(DE_id) REFERENCES differential_exp(DE_id);
alter table targets add FOREIGN KEY GK_targets(target_id) REFERENCES target_info(target_id);



