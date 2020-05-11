Create database GestionVols;
use GestionVols;




create table Client (
   Id_Client          INT PRIMARY KEY   NOT NULL AUTO_INCREMENT,
   Nom                  varchar(254)         null,
   Prenom               varchar(254)         null,
   Num_Passport         varchar(254)         null

)
;

insert into Client (Nom,Prenom,Num_Passport)values('Elhadki','Mariem','FD6086J');
insert into Client (Nom,Prenom,Num_Passport)values('BenBa','Salah','36HFG');
select * from Client;



create table Reservation (
   id_Reservation       int PRIMARY KEY      NOT NULL AUTO_INCREMENT,
   Id_Client            int                  not null,
   id_Vol               int                  not null,
   Date_Reservation     date                  null
)
;


insert into Reservation (Id_Client,id_Vol,Date_Reservation ) values (1,1,'2020-05-07');
select * from Reservation;


create index ASSOCIATION_1_FK on Reservation (
Id_Client ASC
)
;


create index ASSOCIATION_2_FK on Reservation (
id_Vol ASC
)
;


create table Vol (
   id_Vol               int                  PRIMARY KEY      NOT NULL AUTO_INCREMENT,
   LieuDepart           varchar(254)         null,
   LieuArrive           varchar(254)         null,
   DateDepart           date             null,
   DateArrive           date             null,
   NbPlace              int                  null,
   Prix                 float                null
   
)
;


insert into Vol (LieuDepart,LieuArrive,DateDepart,DateArrive,NbPlace,Prix) values('Marrakech','Paris','2020-05-08','2020-05-08',50,5000);
insert into Vol (LieuDepart,LieuArrive,DateDepart,DateArrive,NbPlace,Prix) values('Marrakech','Paris','2020-06-08','2020-06-08',50,5000);
insert into Vol (LieuDepart,LieuArrive,DateDepart,DateArrive,NbPlace,Prix) values('Marrakech','Paris','2020-12-08','2020-12-08',50,5000);
select* from Vol;


alter table Reservation
   add constraint FK_RESERVAT_ASSOCIATI_CLIENT foreign key (Id_Client)
      references Client (Id_Client)
;

alter table Reservation
   add constraint FK_RESERVAT_ASSOCIATI_VOL foreign key (id_Vol)
      references Vol (id_Vol)
;






/* Create trigger for NbPlace */


DELIMITER |
CREATE TRIGGER ReservationNom 
AFTER INSERT ON reservation
FOR EACH ROW
BEGIN

DECLARE SelectIdV INT; 
set SelectIdV= NEW.id_Vol;
UPDATE vol set NbPlace = NbPlace - 1 where id_Vol=SelectIdV;
END |
DELIMITER ;