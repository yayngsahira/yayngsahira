PGDMP                         {            db_inventaris_yayang    14.2    14.2                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            	           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            
           1262    28712    db_inventaris_yayang    DATABASE     x   CREATE DATABASE db_inventaris_yayang WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
 $   DROP DATABASE db_inventaris_yayang;
                postgres    false            �            1259    28713    t_bagian_yayang    TABLE     �   CREATE TABLE public.t_bagian_yayang (
    "BagianID" character varying(10) NOT NULL,
    "NamaBagian" character varying(45),
    "KepalaBagian" character varying(45),
    "Telp" character varying(45)
);
 #   DROP TABLE public.t_bagian_yayang;
       public         heap    postgres    false            �            1259    28718    t_barang_yayang    TABLE     �   CREATE TABLE public.t_barang_yayang (
    "BarangID" character varying(10) NOT NULL,
    "NamaBarang" character varying(45),
    "Satuan" character varying(45),
    "Harga" character varying(45),
    "KategoriID" character varying(5)
);
 #   DROP TABLE public.t_barang_yayang;
       public         heap    postgres    false            �            1259    28723    t_pengeluaran_yayang    TABLE     �   CREATE TABLE public.t_pengeluaran_yayang (
    "NoBK" character varying(10) NOT NULL,
    "Tanggal" date,
    "NoReff" date,
    "BagianID" character varying(10),
    "PetugasID" character varying(5),
    "Keterangan" character varying(50)
);
 (   DROP TABLE public.t_pengeluaran_yayang;
       public         heap    postgres    false            �            1259    28728    t_pengeluaranitem_yayang    TABLE     �   CREATE TABLE public.t_pengeluaranitem_yayang (
    "ID" integer NOT NULL,
    "NoBK" character varying(10),
    "BarangID" character varying(10),
    "Jumlah" integer
);
 ,   DROP TABLE public.t_pengeluaranitem_yayang;
       public         heap    postgres    false            �            1259    28733    t_petugas_yayang    TABLE       CREATE TABLE public.t_petugas_yayang (
    "PetugasID" integer NOT NULL,
    "NamaPetugas" character varying(35),
    "Alamat" character varying(45),
    "Handphone" character varying(15),
    "Password" character varying(10),
    "Level" character varying(20)
);
 $   DROP TABLE public.t_petugas_yayang;
       public         heap    postgres    false                       0    28713    t_bagian_yayang 
   TABLE DATA           [   COPY public.t_bagian_yayang ("BagianID", "NamaBagian", "KepalaBagian", "Telp") FROM stdin;
    public          postgres    false    209   r                 0    28718    t_barang_yayang 
   TABLE DATA           d   COPY public.t_barang_yayang ("BarangID", "NamaBarang", "Satuan", "Harga", "KategoriID") FROM stdin;
    public          postgres    false    210   �                 0    28723    t_pengeluaran_yayang 
   TABLE DATA           r   COPY public.t_pengeluaran_yayang ("NoBK", "Tanggal", "NoReff", "BagianID", "PetugasID", "Keterangan") FROM stdin;
    public          postgres    false    211   �                 0    28728    t_pengeluaranitem_yayang 
   TABLE DATA           V   COPY public.t_pengeluaranitem_yayang ("ID", "NoBK", "BarangID", "Jumlah") FROM stdin;
    public          postgres    false    212                    0    28733    t_petugas_yayang 
   TABLE DATA           r   COPY public.t_petugas_yayang ("PetugasID", "NamaPetugas", "Alamat", "Handphone", "Password", "Level") FROM stdin;
    public          postgres    false    213   :       l           2606    28717 $   t_bagian_yayang t_bagian_yayang_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.t_bagian_yayang
    ADD CONSTRAINT t_bagian_yayang_pkey PRIMARY KEY ("BagianID");
 N   ALTER TABLE ONLY public.t_bagian_yayang DROP CONSTRAINT t_bagian_yayang_pkey;
       public            postgres    false    209            n           2606    28722 $   t_barang_yayang t_barang_yayang_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.t_barang_yayang
    ADD CONSTRAINT t_barang_yayang_pkey PRIMARY KEY ("BarangID");
 N   ALTER TABLE ONLY public.t_barang_yayang DROP CONSTRAINT t_barang_yayang_pkey;
       public            postgres    false    210            p           2606    28727 .   t_pengeluaran_yayang t_pengeluaran_yayang_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.t_pengeluaran_yayang
    ADD CONSTRAINT t_pengeluaran_yayang_pkey PRIMARY KEY ("NoBK");
 X   ALTER TABLE ONLY public.t_pengeluaran_yayang DROP CONSTRAINT t_pengeluaran_yayang_pkey;
       public            postgres    false    211            r           2606    28732 6   t_pengeluaranitem_yayang t_pengeluaranitem_yayang_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.t_pengeluaranitem_yayang
    ADD CONSTRAINT t_pengeluaranitem_yayang_pkey PRIMARY KEY ("ID");
 `   ALTER TABLE ONLY public.t_pengeluaranitem_yayang DROP CONSTRAINT t_pengeluaranitem_yayang_pkey;
       public            postgres    false    212            t           2606    28737 &   t_petugas_yayang t_petugas_yayang_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.t_petugas_yayang
    ADD CONSTRAINT t_petugas_yayang_pkey PRIMARY KEY ("PetugasID");
 P   ALTER TABLE ONLY public.t_petugas_yayang DROP CONSTRAINT t_petugas_yayang_pkey;
       public            postgres    false    213                /   x�3�tJL�L�S�N-M�KO��tL����4�0735375����� �
V            x�3��.-*��H.�44 NC�=... Y�         '   x�3�4202�50�54F0M99�82�s�b���� ���            x�3�4B#�=... ��         7   x�3�H����H�N�KJ,*�4�022�0BsNC#cS3 #�8��+F��� ];f     