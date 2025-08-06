

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Terlambat</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>
            <div class="modal-body">
                								
				<!--begin::Body-->
				<div class="card-body py-3">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
							<!--begin::Table head-->
							<thead>
								<tr class="fw-bolder text-muted">
									
									<th class="min-w-150px">Maintenance</th>
									<th class="min-w-140px">Mesin</th>
									<th class="min-w-120px">Tanggal</th>
									<th class="min-w-120px">Status</th>
									<th class="min-w-100px">Aksi</th>
								</tr>
							</thead>
							<tbody>

							
							@foreach($terlambat as $t)
								<tr>
									<td>
										<a href="/jadwal/detail/{{ $t->id }}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $t->maintenance->nama_maintenance }}</a>
									</td>
									<td>
										<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $t->maintenance->mesin->nama_mesin }}</span>
									</td>
									<td>
										<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ Illuminate\Support\Carbon::parse($t->start_date)->format('d/m/Y') }}</span>
									</td>
									
									<td class="text-dark fw-bolder fs-6">{{ $t->maintenance->mesin->user->nama }}</td>
									<td>
										@if($t->status == 1)
											<span class="badge badge-light-danger">Belum Dikerjakan</span>
										@else
											<span class="badge badge-light-success">Menunggu Approve</span>
										@endif
									</td>
									<td>
										<a href="/jadwal/detail/{{ $t->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen037.svg-->
												<span class="svg-icon svg-icon-muted svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"/>
												<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
											</svg></span>
											<!--end::Svg Icon-->
										</a>
									
									</td>
								</tr>

							@endforeach

							
								
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--begin::Body-->
			<!--end::Tables Widget 13-->
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>	

<div class="modal fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Hari Ini</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                								<!--begin::Tables Widget 13-->
					
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														
														<th class="min-w-150px">Maintenance</th>
														<th class="min-w-140px">Mesin</th>
														<th class="min-w-120px">Tanggal</th>
														<th class="min-w-120px">Status</th>
														<th class="min-w-100px">Aksi</th>
													</tr>
												</thead>
												<tbody>
													


                                                    @foreach($hari_ini as $h)
                                                    <tr>
														<td>
															<a href="/jadwal/detail/{{ $h->id }}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $h->maintenance->nama_maintenance }}</a>
														</td>
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $h->maintenance->mesin->nama_mesin }}</span>
														</td>
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ Illuminate\Support\Carbon::parse($h->start_date)->format('d/m/Y') }}</span>
														</td>
														
														<td>
                                                            @if($h->status == 1)
                                                                <span class="badge badge-light-danger">Belum Dikerjakan</span>
                                                            @else
                                                                <span class="badge badge-light-success">Menunggu Approve</span>
                                                            @endif
														</td>
														<td>
															<a href="/jadwal/detail/{{ $h->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																  <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen037.svg-->
                                                                  <span class="svg-icon svg-icon-muted svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"/>
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
                                                                </svg></span>
                                                                <!--end::Svg Icon-->
															</a>
														
														</td>
													</tr>

                                                @endforeach

												
													
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								<!--end::Tables Widget 13-->
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>	

<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Mesin</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                								<!--begin::Tables Widget 13-->
					
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="min-w-140px">Mesin</th>
														<th class="min-w-120px">Kode Mesin</th>
														<th class="min-w-120px">Tanggal Pembelian</th>
														<th class="min-w-120px">Kategori</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<tbody>
												

                                                    @foreach($seminggu as $m)
                                                    <tr>
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $m->nama_mesin }}</span>
														</td>
														
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $m->kode_mesin }}</span>
														</td>
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $m->tanggal_pembelian }}</span>
														</td>
														
														<td>
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $m->kategori->nama_kategori }}</span>
														</td>
								
													</tr>

                                                @endforeach

												
													
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								<!--end::Tables Widget 13-->
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>	

<div class="modal fade" tabindex="-1" id="kt_modal_4">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">User</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                								<!--begin::Tables Widget 13-->
					
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="min-w-140px">Nama</th>
														<th class="min-w-120px">Username</th>
														<th class="min-w-120px">Level/Role</th>
														<th class="min-w-120px">Terakhir Login</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													

                                                    @foreach($sebulan as $b)
                                                    <tr>
														<td>	
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $b->nama }}</span>
														</td>
														<td>	
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $b->username }}</span>
														</td>
														<td>	
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $b->level }}</span>
														</td>
														<td>	
															<span class="text-dark fw-bolder d-block mb-1 fs-6">{{ $b->last_login }}</span>
														</td>
													</tr>

                                                @endforeach

												
													
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								<!--end::Tables Widget 13-->
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>	