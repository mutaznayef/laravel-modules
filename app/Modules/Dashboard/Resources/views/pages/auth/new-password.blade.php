<x-auth-layout>

	<form class="form w-100" novalidate="novalidate" id="kt_new_password_form"
		data-kt-redirect-url="../../demo1/dist/authentication/layouts/overlay/sign-in.html" action="#">
		<!--begin::Heading-->
		<div class="text-center mb-10">
			<!--begin::Title-->
			<h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
			<!--end::Title-->
			<!--begin::Link-->
			<div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
				<a href="../../demo1/dist/authentication/layouts/overlay/sign-in.html" class="link-primary fw-bold">Sign
					in</a>
			</div>
			<!--end::Link-->
		</div>
		<!--begin::Heading-->
		<!--begin::Input group-->
		<div class="fv-row mb-8" data-kt-password-meter="true">
			<!--begin::Wrapper-->
			<div class="mb-1">
				<!--begin::Input wrapper-->
				<div class="position-relative mb-3">
					<input class="form-control bg-transparent" type="password" placeholder="Password" name="password"
						autocomplete="off" />
					<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
						data-kt-password-meter-control="visibility">
						<i class="ki-duotone ki-eye-slash fs-2"></i>
						<i class="ki-duotone ki-eye fs-2 d-none"></i>
					</span>
				</div>
				<!--end::Input wrapper-->
				<!--begin::Meter-->
				<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
					</div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
					</div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
					</div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
				</div>
				<!--end::Meter-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Hint-->
			<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
				symbols.</div>
			<!--end::Hint-->
		</div>
		<!--end::Input group=-->
		<!--end::Input group=-->
		<div class="fv-row mb-8">
			<!--begin::Repeat Password-->
			<input type="password" placeholder="Repeat Password" name="confirm-password" autocomplete="off"
				class="form-control bg-transparent" />
			<!--end::Repeat Password-->
		</div>
		<!--end::Input group=-->
		<!--begin::Input group=-->
		<div class="fv-row mb-8">
			<label class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="toc" value="1" />
				<span class="form-check-label fw-semibold text-gray-700 fs-6 ms-1">I Agree &
					<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
			</label>
		</div>
		<!--end::Input group=-->
		<!--begin::Action-->
		<div class="d-grid mb-10">
			<button type="button" id="kt_new_password_submit" class="btn btn-primary">
				<!--begin::Indicator label-->
				<span class="indicator-label">Submit</span>
				<!--end::Indicator label-->
				<!--begin::Indicator progress-->
				<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				<!--end::Indicator progress-->
			</button>
		</div>
		<!--end::Action-->
	</form>

	@push('scripts')
	<script src="{{asset('admin')}}/assets/js/custom/authentication/reset-password/new-password.js">
	</script>
	@endpush

</x-auth-layout>