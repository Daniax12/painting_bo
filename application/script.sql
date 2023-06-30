
-- --------------------- ARTISTE
create sequence artiste_seq increment by 1;

create table artiste(
    idartist varchar(50) primary key default concat('ARTISTE_', nextval('artiste_seq')),
    artistname varchar(100),
    biographie text,
    birthdate date,
    image varchar(100),
    adress varchar(100),
    email varchar(100)
);
-- ------------------ TABLEAUX
create sequence painting_seq increment by 1;

create table painting(
    idpainting varchar(50) primary key default concat('TAB_', nextval('painting_seq')),
    paintingname varchar(100),
    idartist varchar(50),
    image varchar(100),
    entrancedate date,
    description text,
    price numeric,
    foreign key(idartist) references artiste(idartist)
);

-- ---------------- CLIENT
create sequence client_seq increment by 1;

create table client (
    idclient varchar(50) primary key default concat('CLIENT_', nextval('client_seq')),
    name varchar(200),
    email varchar(100),
    pass varchar(100),
    adress varchar(100),
    number int
);

-- ------------------ PAYMENT_MODE
create sequence payment_mode_seq increment by 1;

create table paymentmode (
    idpayment varchar(50) primary key default concat('PAY_MODE_', nextval('payment_mode_seq')),
    paymentname varchar(100)
);

-- ----------------- EXPEDITION
create sequence exp_mode_seq increment by 1;

create table expeditionmode(
    idexpedition varchar(50) primary key default concat('EXP_MODE_', nextval('exp_mode_seq')),
    expeditionname varchar(100)
);

-- ---------------- BUYING
create sequence buying_seq increment by 1;

create table buying(
    idbuying varchar(50) primary key default concat('BUYING_', nextval('buying_seq')),
    datebuying date,
    idclient varchar(50),
    idpayment varchar(50),
    idexpedition varchar(50),
    foreign key(idclient) references client(idclient),
    foreign key(idpayment) references paymentmode(idpayment),
    foreign key(idexpedition) references expeditionmode(idexpedition)
);

-- ------------- PAINTING_BUYING
create sequence painting_buying_seq increment by 1;

create table painting_buying(
    idpaintingbuying varchar(50) primary key default concat('SELL_', nextval('painting_buying_seq')),
    idpainting varchar(50),
    idbuying varchar(50),
    foreign key(idpainting) references painting(idpainting),
    foreign key(idbuying) references buying(idbuying)
);

-- ------------ INSERTION EXEMPLE
-- insert into artiste values(default, 'ANTSA', 'ABOUT ME', '2000-08-31', 'img/artiste8.png', 'ANTANANARIVO', 'antsa@gmail.com');

-- ----------------------------------- BACK OFFICE ----------------------------------------

-- ---------------------- COMPTE GENERAL
create sequence compte_general_seq increment by 1;

create table compte_general(
    id_compte_general varchar(50) primary key default concat('CG_', nextval('compte_general_seq')),
    numero_compte varchar(50),
    intitule_compte varchar(50)
);

-- ------------------------ CODE JOURNAL
create sequence code_journal_seq increment by 1;

create table code_journal(
    id_code_journal varchar(50) primary key default concat('CODE_', nextval('code_journal_seq')),
    intitule_code varchar(100),
    reference_code varchar(50)
);

-- --------------------- JOURNAL 
create sequence journal_seq increment by 1;

create table journal(
    id_journal varchar(50) primary key default concat('JOURNAL_', nextval('journal_seq')),
    reference_piece varchar(50),
    libelle_journal varchar(100),
    date_journal date,
    id_code_journal varchar(50),
    est_valide int,
    foreign key(id_code_journal) references code_journal(id_code_journal)
);

-- ------------------- CONTENT_JOURNAL
create sequence content_journal_seq increment by 1;

create table content_journal(
    id_content_journal varchar(50) primary key default concat('CJ_', nextval('content_journal_seq')),
    id_journal varchar(50),
    id_compte_general varchar(50),
    debit numeric,
    credit numeric,
    foreign key(id_journal) references journal(id_journal),
    foreign key(id_compte_general) references compte_general(id_compte_general)
);

-- ----------------------------------------------------------------
