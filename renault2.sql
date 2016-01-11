--
-- iwxdbrzwzwmcvqQL database dump
--

-- Dumped from database version 9.4.5
-- Dumped by pg_dump version 9.4.5
-- Started on 2016-01-11 01:37:51

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 182 (class 3079 OID 11855)
-- Name: iwxdbrzwzwmcvq; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS iwxdbrzwzwmcvq WITH SCHEMA pg_catalog;


--
-- TOC entry 2046 (class 0 OID 0)
-- Dependencies: 182
-- Name: EXTENSION iwxdbrzwzwmcvq; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION iwxdbrzwzwmcvq IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 178 (class 1259 OID 16418)
-- Name: cuentas; Type: TABLE; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

CREATE TABLE cuentas (
    id integer NOT NULL,
    cuenta character varying(50),
    password character varying(50),
    privileges integer
);


ALTER TABLE cuentas OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 177 (class 1259 OID 16416)
-- Name: cuentas_id_seq; Type: SEQUENCE; Schema: public; Owner: iwxdbrzwzwmcvq
--

CREATE SEQUENCE cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cuentas_id_seq OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 2047 (class 0 OID 0)
-- Dependencies: 177
-- Name: cuentas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER SEQUENCE cuentas_id_seq OWNED BY cuentas.id;


--
-- TOC entry 172 (class 1259 OID 16395)
-- Name: elemento_control; Type: TABLE; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

CREATE TABLE elemento_control (
    id integer NOT NULL,
    tipo integer NOT NULL,
    contenido character varying(50) NOT NULL,
    referencia integer
);


ALTER TABLE elemento_control OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 173 (class 1259 OID 16398)
-- Name: elemento_control_idElemento_seq; Type: SEQUENCE; Schema: public; Owner: iwxdbrzwzwmcvq
--

CREATE SEQUENCE "elemento_control_idElemento_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "elemento_control_idElemento_seq" OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 2048 (class 0 OID 0)
-- Dependencies: 173
-- Name: elemento_control_idElemento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER SEQUENCE "elemento_control_idElemento_seq" OWNED BY elemento_control.id;


--
-- TOC entry 180 (class 1259 OID 16426)
-- Name: referencias; Type: TABLE; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

CREATE TABLE referencias (
    id integer NOT NULL,
    numreferencia character varying(20)
);


ALTER TABLE referencias OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 179 (class 1259 OID 16424)
-- Name: referencias_id_seq; Type: SEQUENCE; Schema: public; Owner: iwxdbrzwzwmcvq
--

CREATE SEQUENCE referencias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE referencias_id_seq OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 2049 (class 0 OID 0)
-- Dependencies: 179
-- Name: referencias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER SEQUENCE referencias_id_seq OWNED BY referencias.id;


--
-- TOC entry 181 (class 1259 OID 16441)
-- Name: tablero_id; Type: SEQUENCE; Schema: public; Owner: iwxdbrzwzwmcvq
--

CREATE SEQUENCE tablero_id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tablero_id OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 174 (class 1259 OID 16400)
-- Name: tablero_control; Type: TABLE; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

CREATE TABLE tablero_control (
    id integer DEFAULT nextval('tablero_id'::regclass) NOT NULL,
    tecnico integer NOT NULL,
    status integer NOT NULL,
    h0800 integer,
    h0830 integer,
    h0900 integer,
    h0930 integer,
    h1000 integer,
    h1030 integer,
    h1100 integer,
    h1130 integer,
    h1200 integer,
    h1230 integer,
    h1300 integer,
    h1330 integer,
    h1400 integer,
    h1430 integer,
    h1500 integer,
    h1530 integer,
    h1600 integer,
    h1630 integer,
    h1700 integer,
    h1730 integer,
    h1800 integer,
    h1830 integer,
    h1900 integer,
    h1930 integer,
    h2000 integer,
    lavado integer,
    control_calidad integer,
    terminado integer,
    tot integer,
    partes integer,
    aut integer
);


ALTER TABLE tablero_control OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 175 (class 1259 OID 16403)
-- Name: tecnicos; Type: TABLE; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

CREATE TABLE tecnicos (
    id integer NOT NULL,
    nombre character varying(30) NOT NULL,
    a_paterno character varying(30) NOT NULL,
    a_materno character varying(30) NOT NULL,
    imagen_perfil character(50) NOT NULL
);


ALTER TABLE tecnicos OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 176 (class 1259 OID 16406)
-- Name: tecnicos_idTecnico_seq; Type: SEQUENCE; Schema: public; Owner: iwxdbrzwzwmcvq
--

CREATE SEQUENCE "tecnicos_idTecnico_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "tecnicos_idTecnico_seq" OWNER TO iwxdbrzwzwmcvq;

--
-- TOC entry 2050 (class 0 OID 0)
-- Dependencies: 176
-- Name: tecnicos_idTecnico_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER SEQUENCE "tecnicos_idTecnico_seq" OWNED BY tecnicos.id;


--
-- TOC entry 1908 (class 2604 OID 16421)
-- Name: id; Type: DEFAULT; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER TABLE ONLY cuentas ALTER COLUMN id SET DEFAULT nextval('cuentas_id_seq'::regclass);


--
-- TOC entry 1905 (class 2604 OID 16408)
-- Name: id; Type: DEFAULT; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER TABLE ONLY elemento_control ALTER COLUMN id SET DEFAULT nextval('"elemento_control_idElemento_seq"'::regclass);


--
-- TOC entry 1909 (class 2604 OID 16429)
-- Name: id; Type: DEFAULT; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER TABLE ONLY referencias ALTER COLUMN id SET DEFAULT nextval('referencias_id_seq'::regclass);


--
-- TOC entry 1907 (class 2604 OID 16409)
-- Name: id; Type: DEFAULT; Schema: public; Owner: iwxdbrzwzwmcvq
--

ALTER TABLE ONLY tecnicos ALTER COLUMN id SET DEFAULT nextval('"tecnicos_idTecnico_seq"'::regclass);


--
-- TOC entry 2035 (class 0 OID 16418)
-- Dependencies: 178
-- Data for Name: cuentas; Type: TABLE DATA; Schema: public; Owner: iwxdbrzwzwmcvq
--

INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (1, 'invitado', 'renault', 1);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (2, 'administrador', 'renault4life', 2);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (3, 'senrigan', 'madara', 1);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (4, 'senri', 'madara', 1);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (5, 'madara', 'senrigan', 1);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (6, 'vane1', 'vane1', 1);
INSERT INTO cuentas (id, cuenta, password, privileges) VALUES (7, 'vane2', 'vane2', 1);


--
-- TOC entry 2051 (class 0 OID 0)
-- Dependencies: 177
-- Name: cuentas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: iwxdbrzwzwmcvq
--

SELECT pg_catalog.setval('cuentas_id_seq', 7, true);


--
-- TOC entry 2029 (class 0 OID 16395)
-- Dependencies: 172
-- Data for Name: elemento_control; Type: TABLE DATA; Schema: public; Owner: iwxdbrzwzwmcvq
--

INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (269, 2, 'a35', -1);
INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (270, 3, 't830', -1);
INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (271, 4, 'a25', -1);
INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (272, 3, 't830', -1);
INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (273, 4, 'A25', -1);
INSERT INTO elemento_control (id, tipo, contenido, referencia) VALUES (274, 3, 'Pt830', -1);


--
-- TOC entry 2052 (class 0 OID 0)
-- Dependencies: 173
-- Name: elemento_control_idElemento_seq; Type: SEQUENCE SET; Schema: public; Owner: iwxdbrzwzwmcvq
--

SELECT pg_catalog.setval('"elemento_control_idElemento_seq"', 274, true);


--
-- TOC entry 2037 (class 0 OID 16426)
-- Dependencies: 180
-- Data for Name: referencias; Type: TABLE DATA; Schema: public; Owner: iwxdbrzwzwmcvq
--



--
-- TOC entry 2053 (class 0 OID 0)
-- Dependencies: 179
-- Name: referencias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: iwxdbrzwzwmcvq
--

SELECT pg_catalog.setval('referencias_id_seq', 1, false);


--
-- TOC entry 2031 (class 0 OID 16400)
-- Dependencies: 174
-- Data for Name: tablero_control; Type: TABLE DATA; Schema: public; Owner: iwxdbrzwzwmcvq
--

INSERT INTO tablero_control (id, tecnico, status, h0800, h0830, h0900, h0930, h1000, h1030, h1100, h1130, h1200, h1230, h1300, h1330, h1400, h1430, h1500, h1530, h1600, h1630, h1700, h1730, h1800, h1830, h1900, h1930, h2000, lavado, control_calidad, terminado, tot, partes, aut) VALUES (6, 9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO tablero_control (id, tecnico, status, h0800, h0830, h0900, h0930, h1000, h1030, h1100, h1130, h1200, h1230, h1300, h1330, h1400, h1430, h1500, h1530, h1600, h1630, h1700, h1730, h1800, h1830, h1900, h1930, h2000, lavado, control_calidad, terminado, tot, partes, aut) VALUES (7, 9, 2, 269, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO tablero_control (id, tecnico, status, h0800, h0830, h0900, h0930, h1000, h1030, h1100, h1130, h1200, h1230, h1300, h1330, h1400, h1430, h1500, h1530, h1600, h1630, h1700, h1730, h1800, h1830, h1900, h1930, h2000, lavado, control_calidad, terminado, tot, partes, aut) VALUES (1, 1, 1, NULL, 270, 271, NULL, NULL, 272, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO tablero_control (id, tecnico, status, h0800, h0830, h0900, h0930, h1000, h1030, h1100, h1130, h1200, h1230, h1300, h1330, h1400, h1430, h1500, h1530, h1600, h1630, h1700, h1730, h1800, h1830, h1900, h1930, h2000, lavado, control_calidad, terminado, tot, partes, aut) VALUES (2, 1, 2, 273, 274, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO tablero_control (id, tecnico, status, h0800, h0830, h0900, h0930, h1000, h1030, h1100, h1130, h1200, h1230, h1300, h1330, h1400, h1430, h1500, h1530, h1600, h1630, h1700, h1730, h1800, h1830, h1900, h1930, h2000, lavado, control_calidad, terminado, tot, partes, aut) VALUES (8, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 181
-- Name: tablero_id; Type: SEQUENCE SET; Schema: public; Owner: iwxdbrzwzwmcvq
--

SELECT pg_catalog.setval('tablero_id', 8, true);


--
-- TOC entry 2032 (class 0 OID 16403)
-- Dependencies: 175
-- Data for Name: tecnicos; Type: TABLE DATA; Schema: public; Owner: iwxdbrzwzwmcvq
--

INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (1, 'gilberto', 'cordero', 'cervantes', 'tecnico2.jpg                                      ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (3, 'itzel', 'moreno', 'rivera', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (4, 'vicente', 'funetes', 'rami', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (5, 'marcko', 'cervantes', 'ramirez', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (6, 'marckos', 'cervantes', 'ramirez', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (7, 'marckos2', 'cervantes', 'ramirez', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (8, 'marco3', 'cerv', 'ram', '10-mandamientos-mujer.jpg                         ');
INSERT INTO tecnicos (id, nombre, a_paterno, a_materno, imagen_perfil) VALUES (9, 'marco4', 'cerv', 'ram', '10-mandamientos-mujer.jpg                         ');


--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 176
-- Name: tecnicos_idTecnico_seq; Type: SEQUENCE SET; Schema: public; Owner: iwxdbrzwzwmcvq
--

SELECT pg_catalog.setval('"tecnicos_idTecnico_seq"', 9, true);


--
-- TOC entry 1917 (class 2606 OID 16423)
-- Name: cuentas_pkey; Type: CONSTRAINT; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

ALTER TABLE ONLY cuentas
    ADD CONSTRAINT cuentas_pkey PRIMARY KEY (id);


--
-- TOC entry 1911 (class 2606 OID 16411)
-- Name: elemento_control_pkey; Type: CONSTRAINT; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

ALTER TABLE ONLY elemento_control
    ADD CONSTRAINT elemento_control_pkey PRIMARY KEY (id);


--
-- TOC entry 1919 (class 2606 OID 16431)
-- Name: id; Type: CONSTRAINT; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

ALTER TABLE ONLY referencias
    ADD CONSTRAINT id PRIMARY KEY (id);


--
-- TOC entry 1913 (class 2606 OID 16413)
-- Name: tablero_control_pkey; Type: CONSTRAINT; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

ALTER TABLE ONLY tablero_control
    ADD CONSTRAINT tablero_control_pkey PRIMARY KEY (id);


--
-- TOC entry 1915 (class 2606 OID 16415)
-- Name: tecnicos_pkey; Type: CONSTRAINT; Schema: public; Owner: iwxdbrzwzwmcvq; Tablespace: 
--

ALTER TABLE ONLY tecnicos
    ADD CONSTRAINT tecnicos_pkey PRIMARY KEY (id);


--
-- TOC entry 2045 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: iwxdbrzwzwmcvq
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM iwxdbrzwzwmcvq;
GRANT ALL ON SCHEMA public TO iwxdbrzwzwmcvq;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-01-11 01:37:51

--
-- iwxdbrzwzwmcvqQL database dump complete
--

