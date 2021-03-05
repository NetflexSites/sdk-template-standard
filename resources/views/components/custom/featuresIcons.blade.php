<section class="fdb-block fdb-features-1">
	<div class="container">

		<x-editor-button
			area="contentboxes"
			name="Legg til ny boks"
			description="Legg til nye bokser og rediger direkte i disse"
			icon="fa fa-pencil"
			type="contentlist"
		/>

		<div class="row row-eq-height">

			@foreach (content('contentboxes') as $hash => $box)
			
				@if(count(content('contentboxes')) <= 3)
					<div class="col-sm-6 col-md-4 box-item">
				@else
					<div class="col-sm-6 col-md-3 box-item">
				@endif

					<div class="box-content text-center text-dark">

						<x-editor-button
							area="icon"
							name="Ikontype"
							description="Velg ikontype fra listen"
							type="select"
							options="[
								'fas fa-leaf' => 'Blad', 
								'fas fa-bolt' => 'Bolt', 
								'fas fa-recycle' => 'Resilkulere', 
								'fas fa-lightbulb' => 'Lyspære', 
								'fas fa-handshake' => 'Håndhilse', 
								'fas fa-users' => 'Brukere', 
								'fas fa-exchange-alt' => 'Bytte', 
								'fas fa-globe-americas' => 'Jordklode', 
								'fas fa-broadcast-tower' => 'Tv tårn', 
								'fas fa-network-wired' => 'Nettverk', 
								'fas fa-lock' => 'Lås', 
								'fas fa-plug' => 'Plugg'
							]"
							alias="link_'.$boxd['title']"
							content_field="text"
						/>

						<i class="{{ content('icon') }} fa-3x greenicon"></i>
						<x-inline area="box_content_title'.$boxd['title']" is="h2" class="mb5 pt10" />
						<x-inline area="box_content_'.$boxd['title']" />

					</div>

				</div>

			@endforeach

		</div>
	</div>
</section>