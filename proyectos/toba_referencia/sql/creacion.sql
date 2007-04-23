--
-- PostgreSQL database dump
--

SET client_encoding = 'LATIN1';
SET check_function_bodies = false;
SET client_min_messages = warning;

--

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: log_juegos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE log_juegos (
    id serial NOT NULL,
    juego integer NOT NULL,
    observaciones character varying(255)
);


--
-- Name: log_juegos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('log_juegos', 'id'), 1, false);


--
-- Name: log_persona; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE log_persona (
    id serial NOT NULL,
    persona integer,
    observaciones character varying(255)
);


--
-- Name: log_persona_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('log_persona', 'id'), 1, false);


--
-- Name: ref_deportes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_deportes (
    id serial NOT NULL,
    nombre character varying(60) NOT NULL,
    descripcion character varying(255),
    fecha_inicio date
);


--
-- Name: ref_deportes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_deportes', 'id'), 8, true);


--
-- Name: ref_juegos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_juegos (
    id serial NOT NULL,
    nombre character varying(30) NOT NULL,
    descripcion character varying(255)
);


--
-- Name: ref_juegos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_juegos', 'id'), 5, true);


--
-- Name: ref_juegos_oferta; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_juegos_oferta (
    id serial NOT NULL,
    juego integer NOT NULL,
    jugador integer NOT NULL,
    publicacion timestamp(0) without time zone DEFAULT ('now'::text)::timestamp(6) with time zone
);


--
-- Name: ref_juegos_oferta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_juegos_oferta', 'id'), 1, false);


--
-- Name: ref_persona; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_persona (
    id serial NOT NULL,
    nombre character varying(60) NOT NULL,
    fecha_nac date
);


--
-- Name: ref_persona_deportes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_persona_deportes (
    id serial NOT NULL,
    persona integer NOT NULL,
    deporte integer NOT NULL,
    dia_semana integer,
    hora_inicio integer,
    hora_fin integer
);


--
-- Name: ref_persona_deportes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_persona_deportes', 'id'), 3, true);


--
-- Name: ref_persona_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_persona', 'id'), 2, true);


--
-- Name: ref_persona_juegos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ref_persona_juegos (
    id serial NOT NULL,
    persona integer NOT NULL,
    juego integer NOT NULL,
    dia_semana integer,
    hora_inicio integer,
    hora_fin integer
);


--
-- Name: ref_persona_juegos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval(pg_catalog.pg_get_serial_sequence('ref_persona_juegos', 'id'), 3, true);


--
-- Data for Name: log_juegos; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: log_persona; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: ref_deportes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ref_deportes VALUES (1, 'Voley', NULL, NULL);
INSERT INTO ref_deportes VALUES (3, 'Basquet', NULL, NULL);
INSERT INTO ref_deportes VALUES (5, 'Tenis', NULL, NULL);
INSERT INTO ref_deportes VALUES (7, 'Rugby', NULL, NULL);
INSERT INTO ref_deportes VALUES (8, 'Futbol', NULL, NULL);
INSERT INTO ref_deportes VALUES (6, 'Paddle', NULL, NULL);


--
-- Data for Name: ref_juegos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ref_juegos VALUES (1, 'Ajedrez', NULL);
INSERT INTO ref_juegos VALUES (2, 'Damas', NULL);
INSERT INTO ref_juegos VALUES (4, 'Go', NULL);
INSERT INTO ref_juegos VALUES (5, 'Reversi', NULL);


--
-- Data for Name: ref_juegos_oferta; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: ref_persona; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ref_persona VALUES (2, 'Jose', '2000-5-8');
INSERT INTO ref_persona VALUES (1, 'Horacio', '2000-3-3');


--
-- Data for Name: ref_persona_deportes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ref_persona_deportes VALUES (1, 1, 5, 3, 17, 19);
INSERT INTO ref_persona_deportes VALUES (2, 2, 6, 4, 17, 19);
INSERT INTO ref_persona_deportes VALUES (3, 1, 7, 3, 17, 19);


--
-- Data for Name: ref_persona_juegos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ref_persona_juegos VALUES (3, 2, 5, 0, 17, 19);
INSERT INTO ref_persona_juegos VALUES (1, 1, 1, 0, 17, 19);
INSERT INTO ref_persona_juegos VALUES (2, 1, 2, 1, 17, 19);


--
-- Name: log_cambios_persona_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY log_persona
    ADD CONSTRAINT log_cambios_persona_pkey PRIMARY KEY (id);


--
-- Name: log_juegos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY log_juegos
    ADD CONSTRAINT log_juegos_pkey PRIMARY KEY (id);


--
-- Name: ref_deportes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_deportes
    ADD CONSTRAINT ref_deportes_pkey PRIMARY KEY (id);


--
-- Name: ref_juegos_oferta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_juegos_oferta
    ADD CONSTRAINT ref_juegos_oferta_pkey PRIMARY KEY (id);


--
-- Name: ref_juegos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_juegos
    ADD CONSTRAINT ref_juegos_pkey PRIMARY KEY (id);


--
-- Name: ref_persona_deportes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_persona_deportes
    ADD CONSTRAINT ref_persona_deportes_pkey PRIMARY KEY (id);


--
-- Name: ref_persona_juegos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_persona_juegos
    ADD CONSTRAINT ref_persona_juegos_pkey PRIMARY KEY (id);


--
-- Name: ref_persona_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ref_persona
    ADD CONSTRAINT ref_persona_pkey PRIMARY KEY (id);


--
-- Name: new_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX new_index ON ref_persona_deportes USING btree (persona, deporte);


--
-- Name: ref_persona_juegos_persona_juego_key; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX ref_persona_juegos_persona_juego_key ON ref_persona_juegos USING btree (persona, juego);


--
-- Name: $1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ref_persona_juegos
    ADD CONSTRAINT "$1" FOREIGN KEY (persona) REFERENCES ref_persona(id) ON DELETE CASCADE DEFERRABLE;


--
-- Name: $1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ref_persona_deportes
    ADD CONSTRAINT "$1" FOREIGN KEY (persona) REFERENCES ref_persona(id) ON DELETE CASCADE DEFERRABLE;


--
-- Name: $1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_juegos
    ADD CONSTRAINT "$1" FOREIGN KEY (juego) REFERENCES ref_juegos(id) ON UPDATE CASCADE ON DELETE CASCADE DEFERRABLE;


--
-- Name: $1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY log_persona
    ADD CONSTRAINT "$1" FOREIGN KEY (persona) REFERENCES ref_persona(id) ON UPDATE CASCADE ON DELETE CASCADE DEFERRABLE;


--
-- Name: $1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ref_juegos_oferta
    ADD CONSTRAINT "$1" FOREIGN KEY (juego, jugador) REFERENCES ref_persona_juegos(persona, juego) ON UPDATE CASCADE ON DELETE CASCADE DEFERRABLE;


--
-- Name: $2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ref_persona_juegos
    ADD CONSTRAINT "$2" FOREIGN KEY (juego) REFERENCES ref_juegos(id) ON DELETE CASCADE DEFERRABLE;


--
-- Name: $2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ref_persona_deportes
    ADD CONSTRAINT "$2" FOREIGN KEY (deporte) REFERENCES ref_deportes(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

--REVOKE ALL ON SCHEMA public FROM PUBLIC;
--REVOKE ALL ON SCHEMA public FROM postgres;
--GRANT ALL ON SCHEMA public TO postgres;
--GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--
