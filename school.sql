--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2
-- Dumped by pg_dump version 16.2

-- Started on 2024-03-27 22:06:06

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: pg_database_owner
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO pg_database_owner;

--
-- TOC entry 4823 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: pg_database_owner
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 220 (class 1259 OID 24604)
-- Name: class; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.class (
    class_id integer NOT NULL,
    number_class integer NOT NULL,
    letter_class character varying(1) NOT NULL,
    number_of_students integer NOT NULL
);


ALTER TABLE public.class OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 24603)
-- Name: class_class_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.class ALTER COLUMN class_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.class_class_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 224 (class 1259 OID 24621)
-- Name: lesson; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.lesson (
    lesson_id integer NOT NULL,
    lesson_name character varying(50) NOT NULL
);


ALTER TABLE public.lesson OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 24620)
-- Name: lesson_lesson_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.lesson ALTER COLUMN lesson_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.lesson_lesson_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 216 (class 1259 OID 24592)
-- Name: students; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.students (
    students_id integer NOT NULL,
    name character varying(50) NOT NULL,
    first_name character varying(50) NOT NULL,
    second_name character varying(50),
    date_of_birth date NOT NULL,
    class_id integer NOT NULL
);


ALTER TABLE public.students OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 24591)
-- Name: peuple_peuple_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.students ALTER COLUMN students_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.peuple_peuple_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 222 (class 1259 OID 24615)
-- Name: schedule; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.schedule (
    schedule_id integer NOT NULL,
    class_id integer NOT NULL,
    lesson_id integer NOT NULL
);


ALTER TABLE public.schedule OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 24614)
-- Name: schedule_schedule_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.schedule ALTER COLUMN schedule_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.schedule_schedule_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 218 (class 1259 OID 24598)
-- Name: teachers; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.teachers (
    teachers_id integer NOT NULL,
    last_name character varying(50) NOT NULL,
    first_name character varying(50) NOT NULL,
    patronymic character varying(50),
    date_of_birth date NOT NULL,
    lesson_id character varying(150) NOT NULL
);


ALTER TABLE public.teachers OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 24597)
-- Name: teachers_teachers_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

ALTER TABLE public.teachers ALTER COLUMN teachers_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.teachers_teachers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- TOC entry 4813 (class 0 OID 24604)
-- Dependencies: 220
-- Data for Name: class; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.class (class_id, number_class, letter_class, number_of_students) OVERRIDING SYSTEM VALUE VALUES (1, 1, 'а', 1);
INSERT INTO public.class (class_id, number_class, letter_class, number_of_students) OVERRIDING SYSTEM VALUE VALUES (2, 1, 'б', 1);
INSERT INTO public.class (class_id, number_class, letter_class, number_of_students) OVERRIDING SYSTEM VALUE VALUES (3, 1, 'в', 1);
INSERT INTO public.class (class_id, number_class, letter_class, number_of_students) OVERRIDING SYSTEM VALUE VALUES (4, 1, 'г', 1);


--
-- TOC entry 4817 (class 0 OID 24621)
-- Dependencies: 224
-- Data for Name: lesson; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.lesson (lesson_id, lesson_name) OVERRIDING SYSTEM VALUE VALUES (1, 'Русский');
INSERT INTO public.lesson (lesson_id, lesson_name) OVERRIDING SYSTEM VALUE VALUES (2, 'Математика');
INSERT INTO public.lesson (lesson_id, lesson_name) OVERRIDING SYSTEM VALUE VALUES (3, 'ИЗО');


--
-- TOC entry 4815 (class 0 OID 24615)
-- Dependencies: 222
-- Data for Name: schedule; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.schedule (schedule_id, class_id, lesson_id) OVERRIDING SYSTEM VALUE VALUES (1, 1, 1);
INSERT INTO public.schedule (schedule_id, class_id, lesson_id) OVERRIDING SYSTEM VALUE VALUES (2, 2, 2);
INSERT INTO public.schedule (schedule_id, class_id, lesson_id) OVERRIDING SYSTEM VALUE VALUES (3, 3, 3);


--
-- TOC entry 4809 (class 0 OID 24592)
-- Dependencies: 216
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.students (students_id, name, first_name, second_name, date_of_birth, class_id) OVERRIDING SYSTEM VALUE VALUES (1, 'Вадим', 'Игнатьев', 'Сергеевич', '2010-04-14', 1);
INSERT INTO public.students (students_id, name, first_name, second_name, date_of_birth, class_id) OVERRIDING SYSTEM VALUE VALUES (2, 'Егор', 'Сидоров', 'Егорович', '2009-07-15', 2);
INSERT INTO public.students (students_id, name, first_name, second_name, date_of_birth, class_id) OVERRIDING SYSTEM VALUE VALUES (3, 'Виктор', 'Иванов', 'Дмитриевич', '2011-01-23', 3);
INSERT INTO public.students (students_id, name, first_name, second_name, date_of_birth, class_id) OVERRIDING SYSTEM VALUE VALUES (4, 'Дмитрий', 'Петров', 'Викторович', '2010-10-18', 4);


--
-- TOC entry 4811 (class 0 OID 24598)
-- Dependencies: 218
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.teachers (teachers_id, last_name, first_name, patronymic, date_of_birth, lesson_id) OVERRIDING SYSTEM VALUE VALUES (1, 'Николаев', 'Иван', 'Андреевич', '1992-01-17', '1');
INSERT INTO public.teachers (teachers_id, last_name, first_name, patronymic, date_of_birth, lesson_id) OVERRIDING SYSTEM VALUE VALUES (2, 'Иванов', 'Иван', 'Степанович', '1990-06-27', '2');
INSERT INTO public.teachers (teachers_id, last_name, first_name, patronymic, date_of_birth, lesson_id) OVERRIDING SYSTEM VALUE VALUES (3, 'Кузнецов', 'Игорь', 'Анатольевич', '1994-02-14', '3');


--
-- TOC entry 4824 (class 0 OID 0)
-- Dependencies: 219
-- Name: class_class_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.class_class_id_seq', 4, true);


--
-- TOC entry 4825 (class 0 OID 0)
-- Dependencies: 223
-- Name: lesson_lesson_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.lesson_lesson_id_seq', 3, true);


--
-- TOC entry 4826 (class 0 OID 0)
-- Dependencies: 215
-- Name: peuple_peuple_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.peuple_peuple_id_seq', 4, true);


--
-- TOC entry 4827 (class 0 OID 0)
-- Dependencies: 221
-- Name: schedule_schedule_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.schedule_schedule_seq', 3, true);


--
-- TOC entry 4828 (class 0 OID 0)
-- Dependencies: 217
-- Name: teachers_teachers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.teachers_teachers_id_seq', 3, true);


--
-- TOC entry 4659 (class 2606 OID 24608)
-- Name: class class_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.class
    ADD CONSTRAINT class_pkey PRIMARY KEY (class_id);


--
-- TOC entry 4663 (class 2606 OID 24625)
-- Name: lesson lesson_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.lesson
    ADD CONSTRAINT lesson_pkey PRIMARY KEY (lesson_id);


--
-- TOC entry 4655 (class 2606 OID 24596)
-- Name: students peuple_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.students
    ADD CONSTRAINT peuple_pkey PRIMARY KEY (students_id);


--
-- TOC entry 4661 (class 2606 OID 24619)
-- Name: schedule schedule_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.schedule
    ADD CONSTRAINT schedule_pkey PRIMARY KEY (schedule_id);


--
-- TOC entry 4657 (class 2606 OID 24602)
-- Name: teachers teachers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.teachers
    ADD CONSTRAINT teachers_pkey PRIMARY KEY (teachers_id);


--
-- TOC entry 4664 (class 2606 OID 24609)
-- Name: students class_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.students
    ADD CONSTRAINT class_fkey FOREIGN KEY (class_id) REFERENCES public.class(class_id) NOT VALID;


-- Completed on 2024-03-27 22:06:06

--
-- PostgreSQL database dump complete
--

