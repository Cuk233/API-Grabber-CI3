

<style>
	.error {
		color: #5a5c69;
		font-size: 7rem;
		position: relative;
		line-height: 1;
		width: 12.5rem;
	}

	.error:after {
		content: attr(data-text);
		position: absolute;
		left: 2px;
		text-shadow: -1px 0 #e74a3b;
		top: 0;
		color: #5a5c69;
		background: #f8f9fc;
		overflow: hidden;
		clip: rect(0, 900px, 0, 0);
		animation: noise-anim 2s infinite linear alternate-reverse;
	}

	.error:before {
		content: attr(data-text);
		position: absolute;
		left: -2px;
		text-shadow: 1px 0 #4e73df;
		top: 0;
		color: #5a5c69;
		background: #f8f9fc;
		overflow: hidden;
		clip: rect(0, 900px, 0, 0);
		animation: noise-anim-2 3s infinite linear alternate-reverse;
	}

	.mr-auto,
	.mx-auto {
		margin-right: auto !important;
	}

	.mb-5,
	.my-5 {
  		margin-bottom: 3rem !important;
	}

	.ml-auto,
	.mx-auto {
		margin-left: auto !important;
	}

	.lead {
		font-size: 1.25rem;
		font-weight: 300;
	}

	.text-gray-800 {
  		color: #5a5c69 !important;
	}

	.mb-0,
	.my-0 {
  		margin-bottom: 0 !important;
	}

	.text-gray-500 {
  		color: #b7b9cc !important;
	}


</style>
<body>

	<div class="container-fluid">

		<!-- 404 Error Text -->
		<div class="text-center">
			<div class="error mx-auto" data-text="404">404</div>
			<p class="lead text-gray-800 mb-5">Page Not Found</p>
			<p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
			<a href="index.html">← Back to Dashboard</a>
		</div>

	</div>
	
</body>




