<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Anggota</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>RestFull API NWDI - Version :3.0.0</h1>

	<div id="body">
		<h1>API Anggota </h1>
		<h4>GET</h4>
		<p>Keterangan: API untuk mengambil data anggota semua</p>
		<code><a href="http://localhost:8888/portal/C_anggota" target="blank">http://localhost:8888/portal/C_anggota</a></code>

		<h4>POST</h4>
		<p>Keterangan: API untuk menambah data anggota</p>
		<code><a href="http://localhost:8888/portal/C_anggota/add" target="blank">http://localhost:8888/portal/add</a></code>

		<h4>PUT</h4>
		<p>Keterangan: API untuk merubah data anggota bedasarkan ID</p>
		<code><a href="http://localhost:8888/portal/C_anggota/update{id}" target="blank">http://localhost:8888/portal/C_anggota/update{id}</a></code>

		<h4>DETELE</h4>
		<p>Keterangan: API untuk hapus data anggota bedasarkan ID</p>
		<code><a href="http://localhost:8888/portal/C_anggota/delete{id}" target="blank">localhost:8888/portal/C_anggota/delete{id}</a></code>

	</div>
	

	</div>

</body>
</html>