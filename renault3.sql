--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.5
-- Dumped by pg_dump version 9.4.5
-- Started on 2015-11-08 06:13:44

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 174 (class 1259 OID 16400)
-- Name: tablero_control; Type: TABLE; Schema: public; Owner: pruebas; Tablespace: 
--

CREATE TABLE tablero_control (
    "idTablero" integer NOT NULL,
    "idEmpleado" integer NOT NULL,
    "statusTrabajo" integer NOT NULL,
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
    "ToT" integer,
    partes integer,
    "AUT" integer
);


ALTER TABLE tablero_control OWNER TO pruebas;

-- Completed on 2015-11-08 06:13:44

--
-- PostgreSQL database dump complete
--

