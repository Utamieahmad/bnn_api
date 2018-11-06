<?php

    /**
     * @SWG\Post(
     *   path="/listjejaring",
     *   tags={"Cegah Advokasi Jejaring"},
     *   summary="List Jejaring",
     *   operationId="getList",
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="Authorization Token",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="page",
     *     in="query",
     *     description="page",
     *     required=false,
     *     type="integer"
     *   ),
     *   @SWG\Parameter(
     *     name="limit",
     *     in="query",
     *     description="limit data",
     *     required=false,
     *     type="integer"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

     /**
      * @SWG\Get(
      *   path="/advojejaring",
      *   tags={"Cegah Advokasi Jejaring"},
      *   summary="Get List Jejaring",
      *   operationId="get data",
      *   @SWG\Parameter(
      *     name="Authorization",
      *     in="header",
      *     description="Authorization Token",
      *     required=true,
      *     type="string"
      *   ),
      *   @SWG\Parameter(
      *     name="page",
      *     in="query",
      *     description="page",
      *     required=false,
      *     type="integer"
      *   ),
      *   @SWG\Parameter(
      *     name="limit",
      *     in="query",
      *     description="limit data",
      *     required=false,
      *     type="integer"
      *   ),
      *   @SWG\Response(response=200, description="successful operation"),
      *   @SWG\Response(response=406, description="not acceptable"),
      *   @SWG\Response(response=500, description="internal server error")
      * )
      *
      */

      /**
       * @SWG\Get(
       *   path="/advojejaring/{id}",
       *   tags={"Cegah Advokasi Jejaring"},
       *   summary="Get Jejaring by id",
       *   operationId="get data by id",
       *   @SWG\Parameter(
       *     name="Authorization",
       *     in="header",
       *     description="Authorization Token",
       *     required=true,
       *     type="string"
       *   ),
       *   @SWG\Parameter(
       *     name="id",
       *     in="path",
       *     description="get data by id",
       *     required=true,
       *     type="integer"
       *   ),
       *   @SWG\Response(response=200, description="successful operation"),
       *   @SWG\Response(response=406, description="not acceptable"),
       *   @SWG\Response(response=500, description="internal server error")
       * )
       *
       */

       /**
        * @SWG\Post(
        *   path="/advojejaring",
        *   tags={"Cegah Advokasi Jejaring"},
        *   summary="Store Jejaring",
        *   operationId="Store Data Jejaring",
        *   @SWG\Parameter(
        *     name="Authorization",
        *     in="header",
        *     description="Authorization Token",
        *     required=true,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="tgl_pelaksanaan",
        *     in="formData",
        *     description="Tanggal Pelaksanaan",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="jenis_kegiatan",
        *     in="formData",
        *     description="jenis_kegiatan",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="idpelaksana",
        *     in="formData",
        *     description="id pelaksana",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="kodesasaran",
        *     in="formData",
        *     description="kode sasaran",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="jumlah_instansi",
        *     in="formData",
        *     description="jumlah instansi",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="lokasi_kegiatan",
        *     in="formData",
        *     description="lokasi kegiatan",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="lokasi_kegiatan_idprovinsi",
        *     in="formData",
        *     description="lokasi kegiatan idprovinsi",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="lokasi_kegiatan_idkabkota",
        *     in="formData",
        *     description="lokasi kegiatan idkabkota",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="narasumber",
        *     in="formData",
        *     description="nara sumber",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="panitia_monev",
        *     in="formData",
        *     description="panitia monev",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="materi",
        *     in="formData",
        *     description="materi",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="kodesumberanggaran",
        *     in="formData",
        *     description="kode sumber anggaran",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="file_upload",
        *     in="formData",
        *     description="file upload",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="status_aktif",
        *     in="formData",
        *     description="status aktif",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="periode",
        *     in="formData",
        *     description="periode",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="periode_tahun",
        *     in="formData",
        *     description="periode tahun",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="periode_bulan",
        *     in="formData",
        *     description="periode bulan",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="periode_tanggal",
        *     in="formData",
        *     description="periode tanggal",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="anggaran_id",
        *     in="formData",
        *     description="anggaran id",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="asal_peserta",
        *     in="formData",
        *     description="asal peserta",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="uraian_singkat",
        *     in="formData",
        *     description="uraian singkat",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="koordinat",
        *     in="formData",
        *     description="koordinat",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="foto1",
        *     in="formData",
        *     description="foto1",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="foto2",
        *     in="formData",
        *     description="foto2",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="foto3",
        *     in="formData",
        *     description="foto3",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="status",
        *     in="formData",
        *     description="status",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Parameter(
        *     name="bentuk_kegiatan",
        *     in="formData",
        *     description="bentuk kegiatan",
        *     required=false,
        *     type="string"
        *   ),
        *   @SWG\Response(response=200, description="successful operation"),
        *   @SWG\Response(response=406, description="not acceptable"),
        *   @SWG\Response(response=500, description="internal server error")
        * )
        *
        */

        /**
         * @SWG\Put(
         *   path="/advojejaring/{id}",
         *   tags={"Cegah Advokasi Jejaring"},
         *   summary="Update data by id",
         *   operationId="Store Data Jejaring",
         *   @SWG\Parameter(
         *     name="id",
         *     in="path",
         *     description="update data by id",
         *     required=true,
         *     type="integer"
         *   ),
         *   @SWG\Parameter(
         *     name="Authorization",
         *     in="header",
         *     description="Authorization Token",
         *     required=true,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="tgl_pelaksanaan",
         *     in="formData",
         *     description="Tanggal Pelaksanaan",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="jenis_kegiatan",
         *     in="formData",
         *     description="jenis_kegiatan",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="idpelaksana",
         *     in="formData",
         *     description="id pelaksana",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="kodesasaran",
         *     in="formData",
         *     description="kode sasaran",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="jumlah_instansi",
         *     in="formData",
         *     description="jumlah instansi",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="lokasi_kegiatan",
         *     in="formData",
         *     description="lokasi kegiatan",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="lokasi_kegiatan_idprovinsi",
         *     in="formData",
         *     description="lokasi kegiatan idprovinsi",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="lokasi_kegiatan_idkabkota",
         *     in="formData",
         *     description="lokasi kegiatan idkabkota",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="narasumber",
         *     in="formData",
         *     description="nara sumber",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="panitia_monev",
         *     in="formData",
         *     description="panitia monev",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="materi",
         *     in="formData",
         *     description="materi",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="kodesumberanggaran",
         *     in="formData",
         *     description="kode sumber anggaran",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="file_upload",
         *     in="formData",
         *     description="file upload",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="status_aktif",
         *     in="formData",
         *     description="status aktif",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="periode",
         *     in="formData",
         *     description="periode",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="periode_tahun",
         *     in="formData",
         *     description="periode tahun",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="periode_bulan",
         *     in="formData",
         *     description="periode bulan",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="periode_tanggal",
         *     in="formData",
         *     description="periode tanggal",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="anggaran_id",
         *     in="formData",
         *     description="anggaran id",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="asal_peserta",
         *     in="formData",
         *     description="asal peserta",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="uraian_singkat",
         *     in="formData",
         *     description="uraian singkat",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="koordinat",
         *     in="formData",
         *     description="koordinat",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="foto1",
         *     in="formData",
         *     description="foto1",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="foto2",
         *     in="formData",
         *     description="foto2",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="foto3",
         *     in="formData",
         *     description="foto3",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="status",
         *     in="formData",
         *     description="status",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Parameter(
         *     name="bentuk_kegiatan",
         *     in="formData",
         *     description="bentuk kegiatan",
         *     required=false,
         *     type="string"
         *   ),
         *   @SWG\Response(response=200, description="successful operation"),
         *   @SWG\Response(response=406, description="not acceptable"),
         *   @SWG\Response(response=500, description="internal server error")
         * )
         *
         */

         /**
           * @SWG\Delete(
           *   path="/advojejaring/{id}",
           *   tags={"Cegah Advokasi Jejaring"},
           *   summary="Delete Data by id",
           *   operationId="delete data by id",
           *   @SWG\Parameter(
           *     name="Authorization",
           *     in="header",
           *     description="Authorization Token",
           *     required=true,
           *     type="string"
           *   ),
           *   @SWG\Parameter(
           *     name="id",
           *     in="path",
           *     description="delete data by id",
           *     required=true,
           *     type="integer"
           *   ),
           *   @SWG\Response(response=200, description="successful operation"),
           *   @SWG\Response(response=406, description="not acceptable"),
           *   @SWG\Response(response=500, description="internal server error")
           * )
           *
           */
