<?php

/**
    * @SWG\Get(
    *   path="/sopkebijakan",
    *   tags={"Irtama Sop Kebijakan"},
    *   summary="Get List Data Irtama Sop Kebijakan",
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
    *   path="/sopkebijakan/{id}",
    *   tags={"Irtama Sop Kebijakan"},
    *   summary="Get List Data Irtama SOP Kebijakan by id",
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
    *     description="id data",
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
    *   path="/sopkebijakan",
    *   tags={"Irtama Sop Kebijakan"},
    *   summary="Create Data Irtama SOP Kebijakan",
    *   operationId="create data",
    *   @SWG\Parameter(
    *     name="Authorization",
    *     in="header",
    *     description="Authorization Token",
    *     required=true,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="sprin",
    *     in="formData",
    *     description="sprin",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="tgl_sprin",
    *     in="formData",
    *     description="tgl_sprin (Y-m-d)",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="nama_sop_kebijakan",
    *     in="formData",
    *     description="nama_sop_kebijakan",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="jenis_sop_kebijakan",
    *     in="formData",
    *     description="jenis_sop_kebijakan",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="tgl_sop",
    *     in="formData",
    *     description="tgl_sop (Y-m-d)",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="dokumen",
    *     in="formData",
    *     description="dokumen",
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
    *   @SWG\Response(response=200, description="successful operation"),
    *   @SWG\Response(response=406, description="not acceptable"),
    *   @SWG\Response(response=500, description="internal server error")
    * )
    *
*/

/**
    * @SWG\Put(
    *   path="/sopkebijakan/{id}",
    *   tags={"Irtama Sop Kebijakan"},
    *   summary="Update Data Irtama SOP Kebijakan",
    *   operationId="update data",
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
    *     description="id data",
    *     required=true,
    *     type="integer"
    *   ),
    *   @SWG\Parameter(
    *     name="sprin",
    *     in="formData",
    *     description="sprin",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="tgl_sprin",
    *     in="formData",
    *     description="tgl_sprin (Y-m-d)",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="nama_sop_kebijakan",
    *     in="formData",
    *     description="nama_sop_kebijakan",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="jenis_sop_kebijakan",
    *     in="formData",
    *     description="jenis_sop_kebijakan",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="tgl_sop",
    *     in="formData",
    *     description="tgl_sop (Y-m-d)",
    *     required=false,
    *     type="string"
    *   ),
    *   @SWG\Parameter(
    *     name="dokumen",
    *     in="formData",
    *     description="dokumen",
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
    *   @SWG\Response(response=200, description="successful operation"),
    *   @SWG\Response(response=406, description="not acceptable"),
    *   @SWG\Response(response=500, description="internal server error")
    * )
    *
*/

/**
    * @SWG\Delete(
    *   path="/sopkebijakan/{id}",
    *   tags={"Irtama Sop Kebijakan"},
    *   summary="Delete Data Irtama sop kebijakan By id",
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