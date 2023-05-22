<div class="row top">
	<div class="col-sm-4">
		<!-- RECENT POST-->
		<div class="list-wrapper height-widget">
			<div class="list">
				<div class="recent-title">beautiful Chat system</div>
				<div class="card-container-middle-slide">

					{{--
					<?php include 'widgets/chat-app.php';?> --}}
					@extends('widgets/chat-app')

				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<!-- middle POST-->
		<div class="list-wrapper height-widget">
			<div class="list">
				<div class="recent-title">Users Timeline</div>
				<div class="card-container-middle-slide">
					{{--
					<?php include 'widgets/nemra1.php';?> --}}
					@extends('widgets/nemra1')
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3 mobile">
		<!-- middle POST-->
		<div class="list-wrapper height-widget">
			<div class="list">
				<div class="recent-title">Users Setting</div>
				<div class="card-container-middle-slide">
					{{--
					<?php include('widgets/setting.php');?> --}}
					@extends('widgets/setting')

				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-1 col-sm-1share mobile">
		<!-- middle POST-->
		<div class="list-wrapper">
			<div class="list">
				<div class="recent-title">Share</div>
				<div class="card-container-middle-slide">

					{{--
					<?php include('widgets/share-side.php');?> --}}
					@extends('widgets/share-side')
				</div>
			</div>
		</div>
	</div>

</div>