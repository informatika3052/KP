/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     4/4/2021 10:43:15 PM                         */
/*==============================================================*/


drop table if exists Jabatan;

drop table if exists kotor;

drop table if exists labaRugi;

drop table if exists modal;

drop table if exists neraca;

drop table if exists pegawai;

/*==============================================================*/
/* Table: Jabatan                                               */
/*==============================================================*/
create table Jabatan
(
   idJabatan            int not null,
   kasir2               int,
   admin                int,
   primary key (idJabatan)
);

/*==============================================================*/
/* Table: kotor                                                 */
/*==============================================================*/
create table kotor
(
   idKotor              int not null,
   idJabatan            int,
   pendapat             int,
   biayaPendapat        int,
   total                int,
   primary key (idKotor)
);

/*==============================================================*/
/* Table: labaRugi                                              */
/*==============================================================*/
create table labaRugi
(
   idRugi               int not null,
   idKotor              int,
   beban_gaji           int,
   beban_kebersih       int,
   beban_bensin         int,
   beban_listrik        int,
   beban_sewa           int,
   beban_hp             int,
   penyusutan_kulkas    int,
   penyusutan_kulkas_kantor int,
   penyusutan_peralatan int,
   penyusutan_rak       int,
   total_beban          int,
   total_laba           int,
   primary key (idRugi)
);

/*==============================================================*/
/* Table: modal                                                 */
/*==============================================================*/
create table modal
(
   id_modal             int not null,
   id_neceraca          int,
   modal                int,
   hutang               int,
   penambahan_modal     int,
   rugi_tahun           int,
   total_aktiva         int,
   primary key (id_modal)
);

/*==============================================================*/
/* Table: neraca                                                */
/*==============================================================*/
create table neraca
(
   id_neceraca          int not null,
   idJabatan            int,
   kasir                int,
   bank                 int,
   brankas              int,
   piutang              int,
   stok                 int,
   sewa                 int,
   akumulasi_sewa       int,
   komp                 int,
   akumulasi_komp       int,
   kulkas               int,
   akumulasi_kulkas     int,
   kulkas_kantor        int,
   akumulasi_kulkas_kantor int,
   hp                   int,
   akumulasi_hp         int,
   primary key (id_neceraca)
);

/*==============================================================*/
/* Table: pegawai                                               */
/*==============================================================*/
create table pegawai
(
   idPegawai            int not null,
   idJabatan            int,
   nama                 varchar(254),
   pass                 varchar(254),
   primary key (idPegawai)
);

alter table kotor add constraint FK_Association_2 foreign key (idJabatan)
      references Jabatan (idJabatan) on delete restrict on update restrict;

alter table labaRugi add constraint FK_Association_4 foreign key (idKotor)
      references kotor (idKotor) on delete restrict on update restrict;

alter table modal add constraint FK_Association_6 foreign key (id_neceraca)
      references neraca (id_neceraca) on delete restrict on update restrict;

alter table neraca add constraint FK_Association_5 foreign key (idJabatan)
      references Jabatan (idJabatan) on delete restrict on update restrict;

alter table pegawai add constraint FK_Association_3 foreign key (idJabatan)
      references Jabatan (idJabatan) on delete restrict on update restrict;

