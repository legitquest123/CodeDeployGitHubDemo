<footer class="footer background--dark pt-0">
	<div class="container">
		<div class="row">

			<div class="footer-content col-12 d-md-flex justify-content-between align-items-center my-5">
				<div class="footer__brand">
					<a class="footer-logo mb-0" href="index.html">
						<img src="{{asset('public/images/lq-logo-dark.png')}}" alt="legitquest">
					</a>
				</div>

				<div class="footer__menu">
					<ul class="footer-nav nav">
						<li class="nav-item">
							<a class="nav-link" href="pricing.html">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-full-width.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.html">Login</a>
						</li>
						<li class="nav-item nav-item--btn">
							<a href="signup.html" class="btn btn-primary btn-sm btn--has-shadow mt-3 mt-md-0">Sign up</a>
						</li>
					</ul>
				</div>
			</div> <!-- Footer Content -->

			<div class="col-12">
				<div class="footer-copyright-column d-md-flex justify-content-between align-items-center">
					<div class="copyright">
						<p>©2019 - Legitquest. All rights reserved.</p>
					</div>

					<ul class="social-icons ml-auto mb-0">
						<li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#0"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#0"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#0"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</footer> <!-- END Footer -->

<div class="alert-notifications-wrapper">

	<div id="subscribe-success-notification" class="alert alert-validation alert-success alert-dismissible fade" role="alert">
		Thank you for subscribing! Please check your inbox to opt-in.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div> <!-- Subscribe Success -->

	<div id="subscribe-error-notification" class="alert alert-validation alert-danger alert-dismissible fade" role="alert">
		Oh no, error happened! Please check the email address and/or try again.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div> <!-- Subscribe Error -->

</div> <!-- END Alert Notifications Wrapper -->

<!-- Global Required JS -->

<!-- <script src="{{asset('public/js/vendor/query-3.3.1.min.js')}}"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{asset('public/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('public/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/vendor/moment.min.js')}}"></script>
<!-- Vendor/Plugins JS -->
<script src="{{asset('public/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('public/js/vendor/jquery.tree-multiselect.js')}}"></script>
<script src="{{asset('public/js/vendor/daterangepicker.js')}}"></script>

<!-- Vendor/Plugins JS Init -->
<script src="{{asset('public/js/init/wb.ajaxchimp-init.js')}}"></script>


<script src="{{asset('public/js/min/main-min.js')}}"></script>
<script src="{{asset('public/js/searchbar.js')}}"></script>
<script src="{{asset('public/js/vendor/jquery.slimscroll.min.js')}}"></script>

<script>
	$(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'right',
			showDropdowns: true,
			minYear: 1901,
			"linkedCalendars": false,
			"maxYear": 2019,
			//"parentEl": "aside",
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});
	});
</script>


<script>
	$(function() {
		$('.filter-sidebar .slimScroll').slimScroll({
			height: '',
		});
	});
</script>
<script type="text/javascript">
	$('.filter-togle a').on('click', function() {
		$('.filter-sidebar').toggleClass('show')
	})
</script>
<script>
	let txt_filtr_within_res_arr = [];

	function search_filter_within_result() {
		if (txt_filtr_within_res_arr.length > 0) {
			txt_filtr_within_res_arr.filter((item) => {
				if (item.indexOf($('#txt_filter_within_result').val()) === -1) {
					if ($('#txt_filter_within_result').val().trim() != '') {
						txt_filtr_within_res_arr.push($('#txt_filter_within_result').val());
						$('#txt_filter_within_result').val('');
						getMetada()
					}
				}
			})
		} else {
			if ($('#txt_filter_within_result').val().trim() != '') {
				txt_filtr_within_res_arr.push($('#txt_filter_within_result').val());
				$('#txt_filter_within_result').val('');
				getMetada()
			}
		}
	}
	$('#btn_search_filter_within_result').on('click', function() {
		search_filter_within_result();
	});
	$('#txt_filter_within_result').on('keyup', function(event) {
		if (event.keyCode === 13) {
			search_filter_within_result();
		}
	});

	function getMetada() {
		let searchString = 'sultan';
		let pageNo = 0;
		let type = 'freetext'
		let jsonString = '';
		let filter = txt_filtr_within_res_arr.join(',');
		let sortBy = 1;
		let pageSize = 10;
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "{{url('getMetadata')}}",
			data: {
				_token: "{{csrf_token()}}",
				searchString: searchString,
				pageNo: pageNo,
				type: type,
				jsonString: jsonString,
				filter: filter,
				sortBy: sortBy,
				pageSize: pageSize,
			}
		}).done(function(responseData) {
			if (responseData.success) {
				let metaData = responseData.metaData;
				$('.search__filter__list').html('');
				txt_filtr_within_res_arr.forEach(function(entry) {
					$('.search__filter__list').append('<div class="' + entry + ' filter-item d-inline-flex align-items-center mr-2"><span>' + entry + '</span><a onclick="removeFilterWithInResult(\'' + entry + '\')" href="javascript:void(0)" class="remove-selected">×</a></div>');
				});
				if (metaData.JudgmentList.length > 0) {
					$('.result-panel-right').html('');
					metaData.JudgmentList.map((item) => {
						$('.result-panel-right').append('<div class="col-md-12 mb-4"><div class="post card h-100 p-0 border-0 bg-transparent"><div class="card-body p-0"><a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary"><u>' + item.Petitioner + ' V. ' + item.Responder + '</u><img src="{{asset("public/images/caution.svg")}}" class="ml-2" alt="" height="22px"></a><p class="card-text text-success mb-1">' + item.CourtName + ' | ' + item.DateOfJudgement + '</p><p class="mb-1 detailed-text"><b>Judgment : </b>' + item.HighlightsList["9"].HighlightedString + '</p><a href="#/" class="popup-open search-link mr-3"><small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small></a><a href="#/" class="popup-open judge-link mr-3"><small><i class="fas fa-user-tie"></i> Judges</small></a></div><div class="card-footer pb-4 bg-dark d-none">' + item.Bench + '</div></div></div>');
					})
				} else {
					$('.result-panel-right').html('No result found');
				}
			}
		}).fail(function() {
			console.log('Ajax Failed');
		});
	}

	function removeFilterWithInResult(removeVal) {
		const index = txt_filtr_within_res_arr.indexOf(removeVal);
		if (index > -1) {
			txt_filtr_within_res_arr.splice(index, 1);
		}
		$('.' + removeVal).remove();
		getMetada();
	}

	/* function filterMetadata() {
		searchString = search_query_filter_within_result;
		const appendedWords = MetaData.JudgmentList.filter((item) => {
			return item.HighlightsList["9"].HighlightedString.toLowerCase().indexOf(searchString.toLowerCase()) !== -1
		})
		if (appendedWords.length != 0) {
			appendedWords.map((item) => {
				$('.right-panel-data').html('<div class="col-md-12 mb-4"><div class="post card h-100 p-0 border-0 bg-transparent"><div class="card-body p-0"><a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary"><u>' + item.Petitioner + ' V. ' + item.Responder + '</u><img src="{{asset("public/images/caution.svg")}}" class="ml-2" alt="" height="22px"></a><p class="card-text text-success mb-1">High Court Of Punjab And Haryana | ' + item.DateOfJudgement + '</p><p class="mb-1 detailed-text"><b>Judgment : </b>' + item.HighlightsList["9"].HighlightedString + '</p><a href="#/" class="popup-open search-link mr-3"><small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small></a><a href="#/" class="popup-open judge-link mr-3"><small><i class="fas fa-user-tie"></i> Judges</small></a></div><div class="card-footer pb-4 bg-dark d-none">' + item.Bench + '</div></div></div>');
				console.log(item.HighlightsList["9"].HighlightedString);
			})
		} else {
			$('.right-panel-data').html('No result found');
		}
	} */



	$(".courtFilter")
		.on("click",
			function(event) {
				var benchsectionId = $('input.courtFilter:checked').val();
				var maincourtarrary = "";
				var courtarrary = "";
				var prevArray = $("#filtercourt").val();
				$("#filteridraf").val('')
				prevArray = prevArray.substring(0, prevArray.length - 1);
				$("#filtercourt").val("");
				$("#order").val("1");
				$("input:checkbox[name=maincourt]:checked").each(function() {
					if ($(this).val()) {
						maincourtarrary += $(this).val() + ",";
						$("#filtercourt").val(maincourtarrary);
						if (!prevArray.includes($(this).val())) {
							$("input:radio[name=court]:checked").each(function() {
								if ($(this).val()) {
									if (prevArray.includes($(this).val())) {
										$(this).removeAttr('checked');
									}
								}
							});
						}
						$("input:checkbox[name=subcourt]:checked").each(function() {
							if ($(this).val()) {
								if (prevArray.includes($(this).val())) {
									$(this).removeAttr('checked');
									$("input:checkbox[name=court]:checked").each(function() {
										if ($(this).val()) {
											if (prevArray.includes($(this).val())) {
												$(this).removeAttr('checked');
											}
										}
									});
								}
							}
						});
					}
				});
				$("input:checkbox[name=court]:checked").each(function() {
					if ($(this).val()) {
						courtarrary += $(this).val() + ",";
						$("#filtercourt").val(courtarrary);
						$("input:checkbox[name=subcourt]:checked").each(function() {
							if ($(this).val()) {
								if (prevArray.includes($(this).val())) {
									$(this).removeAttr('checked');
								}
							}
						});
					}
				});
				$("input:checkbox[name=subcourt]:checked").each(function() {
					if ($(this).val()) {
						courtarrary += $(this).val() + ",";
						$("#filtercourt").val(courtarrary);
					}

				});
				// if ((courtarrary !== null || courtarrary !== "") && (maincourtarrary === null && maincourtarrary === "")) {
				// 	courtarrary = courtarrary;
				// }
				// if(courtarrary === null || courtarrary === "" && (maincourtarrary !== null && maincourtarrary !== "")){
				// 	courtarrary = courtarrary;
				// }
				// if ((courtarrary !== null || courtarrary !== "") && (maincourtarrary !== null && maincourtarrary !== "")) {
				// 	courtarrary = maincourtarrary;
				// }
				// console.log(courtarrary)
				if (courtarrary === "" || courtarrary === null || courtarrary === undefined) {
					$("#CourtFilter").val("");
				} else {
					$("#CourtFilter").val("courtfilter");
				}
				var searchType = $("#searchtype").val();
				//  $.blockUI({ message: '<img src="../../Content/images/lq-spin.gif" alt="Please Wait... We are preparing ur result" style= "width:70px;height:70px;" />' });
				var sortOrder = $('#sortBy').val();
				var bencharray = $("#filterbench").val();
				var yeararray = $("#filteryear").val();
				var partyarray = $("#filterparty").val();
				var idrafarray = $("#filteridraf").val();
				var decisionarray = $("#filterdecision").val();
				var searchwithinresult = $("#searchwithinresult").val();
				var searchText = $("#SearchTitle").val();
				var FilterViewModel = {};
				FilterViewModel.SearchText = searchText;
				FilterViewModel.SearchType = searchType;
				FilterViewModel.BenchArray = bencharray;
				FilterViewModel.Yeararray = yeararray;
				FilterViewModel.Idrafarray = idrafarray;
				FilterViewModel.Partyarray = partyarray;
				FilterViewModel.Decisionarray = decisionarray;
				FilterViewModel.SelectedFilter = "courtfilter";
				FilterViewModel.Filter = searchwithinresult;
				FilterViewModel.SortBy = sortOrder;
				FilterViewModel.Courtarray = courtarrary;
				FilterViewModel.RemoveFilter = "";
				var filterValueList = $("#filterValueList").val();
				FilterViewModel.FilterValueList = filterValueList;
				FilterViewModel.pageNo = 0;
				FilterViewModel.type = 'freetext';
				FilterViewModel.pageSize = 10;
				//console.log(FilterViewModel);
				$.ajax({
						url: "{{url('getCaseDetailsByBenchFilter')}}",
						type: "POST",
						contentType: "application/json",
						headers: {
							'X-CSRF-TOKEN': $('#token').val()
						},
						data: JSON.stringify(FilterViewModel)
					})
					.done(function(result) {
						let metaData = result.metaData;
						// $('.search__filter__list').html('');
						// txt_filtr_within_res_arr.forEach(function(entry) {
						// 	$('.search__filter__list').append('<div class="' + entry + ' filter-item d-inline-flex align-items-center mr-2"><span>' + entry + '</span><a onclick="removeFilterWithInResult(\'' + entry + '\')" href="javascript:void(0)" class="remove-selected">×</a></div>');
						// });
						$(".total__result__count").html(metaData.TotalResultCount);
						if (metaData.JudgmentList.length > 0) {
							$('.result-panel-right').html('');
							metaData.JudgmentList = metaData.JudgmentList.filter(function(item) {
								if (Object.keys(item.HighlightsList).length != 0) {
									return item; // skip
								}
							});
							metaData.JudgmentList.map(function(item) {
								$('.result-panel-right').append('<div class="col-md-12 mb-4"><div class="post card h-100 p-0 border-0 bg-transparent"><div class="card-body p-0"><a href="./judgment-detail.html" class="h4 card-title d-block mb-0 text-primary"><u>' + item.Petitioner + ' V. ' + item.Responder + '</u><img src="{{asset("public/images/caution.svg")}}" class="ml-2" alt="" height="22px"></a><p class="card-text text-success mb-1">' + item.CourtName + ' | ' + item.DateOfJudgement + '</p><p class="mb-1 detailed-text"><b>Judgment : </b>' + item.HighlightsList["9"].HighlightedString + '</p><a href="#/" class="popup-open search-link mr-3"><small><i class="fa fa-search" aria-hidden="true"></i> Search Within Case</small></a><a href="#/" class="popup-open judge-link mr-3"><small><i class="fas fa-user-tie"></i> Judges</small></a></div><div class="card-footer pb-4 bg-dark d-none">' + item.Bench + '</div></div></div>');
							});
							metaData.JudgmentList.map((item) => {


							})
						} else {
							$('.result-panel-right').html('No result found');
						}
						// bindSearchResult(metaData.JudgmentList, metaData.caseText, metaData.CaseCount, 1, metaData.UserId, metaData.IsMobileDevice, metaData.filterValueList, metaData.filterList);
						// BindFiltersList(metaData);
					});
				$("#searchwithinresult").val('');
				$("#removefilter").val('');
			});

	function BindFiltersList(data) {
		var partyFilter = $("#PartyFilter").val();
		var yearFilter = $("#YearFilter").val();
		var benchFilter = $("#BenchFilter").val();
		var courtFilter = $("#CourtFilter").val();
		var decisionFilter = $("#DecisionFilter").val();
		var order = $("#order").val();
		// BindsectionList(data);
		// BindpartyList(data);
		// BindYearList(data);
		// BindBenchList(data);
		// BindDecisionList(data);
		// BindidrafList(data);
		if ((data.SupremeCourtList != null || data.HighCourtList != null || data.OtherCourtList != null) && courtFilter !== "courtfilter") {
			BindCourtList(data);
		}
		// Setfilterclickable();
	}

	function convertTitleToSlug(Text) {
		return Text
			.toLowerCase()
			.trim()
			.replace(/  +/g, ' ')
			.replace(/ /g, '-')
			.replace(/[^\w-]+/g, '');
	}

	function FormatCaseResult(caseDetails, id, userId, isMobileDevice) {
		var casehtml = '';
		var caseId = caseDetails.Id;
		var formatPartyText = caseDetails.Bench;
		var formatOtherText = "";
		var slugTitle = convertTitleToSlug(formatPartyText);

		var formatcitationformattext = caseDetails.CourtName + " | " + caseDetails.DateOfJudgment;
		if (caseDetails.IsOverruledExist) {
			casehtml += "<div id=" + (id) + " class='result-block'><h2 class='result_title'>";
			casehtml += "<a href='#' onclick= RedirectToPage('" + caseDetails.EncryptedId + "','false','" + slugTitle + "')><span>" + formatPartyText + "</span></a>";
			if (!isMobileDevice) {
				casehtml += "<img src='" + caseDetails.OverruledImgUrl + "' style='width: 100px;height: 25px;margin-left: 10px;'/>";
			}
			casehtml += "</h2>" + " <div class='info_line'> " + formatcitationformattext + "</div>";
		} else if (caseDetails.IsDistinguishedExist) {
			casehtml += "<div id=" + (id) + " class='result-block'><h2 class='result_title'>";
			casehtml += "<a href='#' onclick= RedirectToPage('" + caseDetails.EncryptedId + "','false','" + slugTitle + "')><span>" + formatPartyText + "</span></a>";
			if (!isMobileDevice) {
				casehtml += "<img src='" + caseDetails.DistinguishedImgUrl + "' style='width: 100px;height: 25px;margin-left: 10px;'/>";
			}
			casehtml += "</h2>" + " <div class='info_line'> " + formatcitationformattext + "</div>";

		} else if (caseDetails.IsOtherStatusExist) {
			casehtml += "<div id=" + (id) + " class='result-block'><h2 class='result_title'>";
			casehtml += "<a href='#' onclick= RedirectToPage('" + caseDetails.EncryptedId + "','false','" + slugTitle + "')><span>" + formatPartyText + "</span></a>";
			if (!isMobileDevice) {
				casehtml += "<img src='" + caseDetails.OtherStatusImgUrl + "' style='width: 100px;height: 25px;margin-left: 10px;'/>";
			}
			casehtml += "</h2>" + " <div class='info_line'> " + formatcitationformattext + "</div>";
		} else {
			casehtml += "<div id=" + (id) + " class='result-block'><h2 class='result_title'>";
			casehtml += "<a href='#' onclick= RedirectToPage('" + caseDetails.EncryptedId + "','false','" + slugTitle + "')><span>" + formatPartyText + "</span></a></h2>";
			casehtml += " <div class='info_line'> " + formatcitationformattext + "</div>";
		}
		casehtml += " <div class='search-text'>" +
			"<p>";

		if (caseDetails.HighlightsList[9].HighlightedString !== "" && caseDetails.HighlightsList[9].HighlightedString !== null) {
			casehtml += '<b>' + caseDetails.HighlightsList[9].HighlightType + ' : </b> ' + caseDetails.HighlightsList[9].HighlightedString;
		}
		casehtml += "</p></div>";
		casehtml += "<div class='search-action'>" +
			"<a  href='#/' class='btn  btn-sm popup-open search-link'><i class='fa fa-search' aria-hidden='true'></i> Search Within Case</a>" +
			"<a href='#/' class='btn  btn-sm popup-open judge-link'> <i class='fa fa-search' aria-hidden='true'></i>  Judges</a>";
		if (caseDetails.SnapShot !== "" && caseDetails.SnapShot !== null) {
			casehtml +=
				"<a  href='#/' class='btn  btn-sm popup-open snapshot-link'><i class='fa fa-search' aria-hidden='true'></i> Snapshot</a>";
			$('.popup-open').on('click', function(e) {
				if ($(this).hasClass('snapshot-link')) {
					$(this).siblings('.popup-container').children().removeClass('active');
					$(this).siblings('.popup-container').children('.snapshot-popup').addClass('active');
					e.preventDefault();
				}
			});
		}


		casehtml += "<div class='popup-container'>" +
			"<div class='case-popup search-popup'>" +
			"<div class='header-popup'><span>Search Within Case</span><a href='#' class='popup-close'><i class='fa fa-times' aria-hidden='true'></i></a></div>" +

			"<div class='popup-result popup-body'>" +
			"<div class='case-search d-flex'>" +
			"<input type='text' id=searchitem" + id + " placeholder='Type Your Text Here' class='form-control'><button onclick=searchHighlight('" + caseDetails.EncryptedId + "','" + id + "') type='button' class='btn btn-primary'>Search</button>" +
			"<button type='button' onclick='searchHighlightPrev()' class='btn btn-primary'>Previous</button><button onclick='searchHighlightNext()' type='button' class='btn btn-primary'>Next</button>" +
			"</div>" +
			"<span id=occurancefound" + id + "></span>" +
			"<div id=searchtext" + id + "></div>" +
			"</div>" +
			"</div>" +
			"<div class='case-popup judge-popup'>" +
			"<div class='header-popup'><span>Judges</span><a href='#' class='popup-close'><i class='fa fa-times' aria-hidden='true'></i></a></div>" +
			"<div class='popup-body'>" + "<p class='txt110'>" + caseDetails.Bench + "</p></div>" +
			"</div>" +
			"<div class='case-popup snapshot-popup'>" +
			"<div class='header-popup'><span> Snapshot</span><a href='#' class='popup-close'><i class='fa fa-times' aria-hidden='true'></i></a></div>" +
			"<div class='popup-body'>" + "<p class='txt110'>" + caseDetails.SnapShot + "</p></div>" +
			"</div>" +
			"</div> </div></div>";
		return casehtml;
	}

	function bindSearchResult(caseDetails, searchText, count, currentpage, userId, isMobileDevice, filterValueList, filterList) {
		var casehtml = "";
		// StopAutoComplete();
		$('#result').html('');
		$('#resultcount').hide();
		$('#filter1').show();
		$('#act_header').hide();
		$(".pagination").show(500);
		$("#searchCaseResult").val(caseDetails);
		$("#totalResult").html('');
		$("#filterValueList").val(filterValueList);
		var isshowpaging = count > 10 ? true : false;
		if (caseDetails != null) {
			var headerHtml = "";
			headerHtml += "<span>Found : " +
				count +
				" results for query " +
				searchText + "";
			if (filterList != null) {
				headerHtml += " <div class='tag-container'>";
				for (var j = 0; j < filterList.length; j++) {
					headerHtml += "<a href='#'  onclick=RemoveFilterWithInResult('" + filterList[j] + "')>" + filterList[j] + " <i class='fa fa-times'></i></a>";
				}
				headerHtml += " </div>";
			}
			headerHtml += "</span>";
			$("#totalResult").append($(headerHtml));
			for (var i = 0; i < caseDetails.length; i++) {
				casehtml += FormatCaseResult(caseDetails[i], i, userId, isMobileDevice);
			}
		}
		$("#sortBy").show(500);
		$('#resultcount').show();
		$("#result").append($(casehtml));
		$("#sortBy").show(500);
		$('#resultcount').show();

		// $('.pagination').twbsPagination('destroy');
		$("#currentpage").val(currentpage);
		if (isshowpaging) {

			var totalPage = count / 10;
			var pageCount = Math.round(totalPage);
			var splitPage = totalPage.toString().split(".");
			if (splitPage.length > 1) {
				if (splitPage[1] <= 4) {
					pageCount = pageCount + 1;
				}
			}
			if (pageCount > 100) {
				pageCount = 100;
			}
			var visiblePagesNo = 5;
			if (isMobileDevice) {
				visiblePagesNo = 1;
			}
			$('.pagination')
				.twbsPagination({
					totalPages: pageCount,
					visiblePages: visiblePagesNo,
					onPageClick: function(event1, page) {
						// $.blockUI({
						// 	message: '<img src="../../Content/images/lq-spin.gif" alt="Please Wait... We are preparing ur result" style= "width:70px;height:70px;" />'
						// });
						currentpage = $("#currentpage").val();
						if (currentpage !== page.toString()) {
							LoadOtherData(page);
							$("html, body").animate({
								scrollTop: $("#0").offset().top - 200
							}, 500);
						}
						$("#currentpage").val(page);
					}
				});
		}
		$('.sidebar-toggle').on('click', function(e) {
			$('.search-result-section').toggleClass('open-sidebar');
		});
		$('.popup-open').on('click', function(e) {

			if ($(this).hasClass('search-link')) {
				$(this).siblings('.popup-container').children().removeClass('active');
				$(this).siblings('.popup-container').children('.search-popup').addClass('active');
				e.preventDefault();
			} else if ($(this).hasClass('citation-link')) {
				$(this).siblings('.popup-container').children().removeClass('active');
				$(this).siblings('.popup-container').children('.citation-popup').addClass('active');
				e.preventDefault();
			} else if ($(this).hasClass('judge-link')) {
				$(this).siblings('.popup-container').children().removeClass('active');
				$(this).siblings('.popup-container').children('.judge-popup').addClass('active');
				e.preventDefault();
			} else if ($(this).hasClass('snapshot-link')) {
				$(this).siblings('.popup-container').children().removeClass('active');
				$(this).siblings('.popup-container').children('.snapshot-popup').addClass('active');
				e.preventDefault();
			}
		});
		$('.popup-close').on('click', function(e) {

			$(this).parent().parent().removeClass('active');
			e.preventDefault();
		});
		$(".cited-trigger").on("click", function(event) {
			var sectionId = $(this).data("sectionid");
			$('#sectionId').val(sectionId);
			//RedirectToOrder(sectionId);
			//var aux = document.createElement("input");
			//aux.setAttribute("value", sectionId);
			//document.body.appendChild(aux);
			//aux.select();
			//document.execCommand("copy");
			//document.body.removeChild(aux);
			//alert("Copied");
		});

		// $.unblockUI();
	}

	function BindCourtList(data) {
		var courtlisthtml = "";
		$('#court').html('');
		$('#court').hide();
		$('#casetype').hide();
		if (data.SupremeCourtList != null || data.HighCourtList != null || data.OtherCourtList != null) {
			courtlisthtml +=
				" <div class='filter-toggle'><i class='os-icon-minus os-icon'></i></div><h6 class='filter-header'>By Court</h6>";
			//"<div class='filter-panel'><div class='filter-heading'><a data-toggle='collapse' href='#collaps1' aria-expanded='false' aria-controls='collaps1'><h4>By Court</h4></a></div>";
			courtlisthtml += "<div class='filter-body'>";
			courtlisthtml += "<ul class='filter-list'>";

		}
		if (data.SupremeCourtList != null && data.SupremeCourtList) {
			courtlisthtml += "<li>";

			courtlisthtml += " <div class='radio radio-default'><label><input name='maincourt' class='courtFilter' type='radio' value='" + data.SupremeCourtList.CaseIds + "'><span style='text-transform: capitalize;'>" +
				"" + data.SupremeCourtList.CourtName + " <img src='../Content/newtheme/img/idraf-icon.png' style='margin-left: 10px;' class='idraf-icon'/></span></label><b class='case-count'>" + data.SupremeCourtList.CaseCount + "</b>" +
				"</div></li>";
		}
		if (data.HighCourtList != null && data.HighCourtList) {
			courtlisthtml += "<li>";
			courtlisthtml += " <div class='radio radio-default'><label><input name='maincourt' class='courtFilter styled' type='radio' value=" + data.HighCourtList.CaseIds + "><span>" +
				"" + data.HighCourtList.CourtName + " </span></label><b class='case-count'>" + data.HighCourtList.CaseCount + "</b>" +
				"</div><div class='filter-dropdown'><form  class='' action='#' method='post'><ul>";

			if (data.HighCourtList.CaseListViewModel != null) {
				for (var i = 0; i < data.HighCourtList.CaseListViewModel.length; i++) {
					var bench = data.HighCourtList.CaseListViewModel[i];
					courtlisthtml += "<li>";
					courtlisthtml += "<div class='radio radio-primary'><label><input  name='court' class='courtFilter' type='radio' value='" + bench.SubCourtName + "'><span>";
					if (bench.IsHaveSegregation === "N") {
						courtlisthtml += "" + bench.SubCourtName + "";
					} else {
						courtlisthtml += "" + bench.SubCourtName + "<img src='../Content/newtheme/img/idraf-icon.png' style='margin-left: 10px;' class='idraf-icon'/>";
					}
					courtlisthtml += "</span></label><b class='case-count'>" + bench.SubCourtCaseCount + "</b></div>";

					if (bench.SubCourtList !== null && bench.SubCourtList.length > 0) {
						courtlisthtml += "<div class='filter-dropdown'><form  class='' action='#' method='post'><ul>";
						for (var j = 0; j < bench.SubCourtList.length; j++) {
							var subbench = bench.SubCourtList[j];
							courtlisthtml += "<li>";
							courtlisthtml += "<div class='radio-item radio radio-primary'><label class='label'><input  name='subcourt' class='courtFilter' type='radio' value='" + subbench.SubCourtName + "'><span>";
							if (bench.IsHaveSegregation === "N") {
								courtlisthtml += "" + subbench.SubCourtName + "";
							} else {
								courtlisthtml += "" + subbench.SubCourtName + "<img src='../Content/newtheme/img/idraf-icon.png' style='margin-left: 10px;' class='idraf-icon'/>";
							}
							courtlisthtml += "</span></label><b class='case-count'>" + subbench.SubCourtCaseCount + "</b>";
							courtlisthtml += "</div></li>";
						}
						courtlisthtml += "</ul></form></div>";
					}
					courtlisthtml += "</li>";
				}
			}
			courtlisthtml += "</ul></form></div></li>";
		}
		if (data.OtherCourtList != null && data.OtherCourtList) {
			courtlisthtml += "<li>";
			courtlisthtml += " <div class='radio radio-default'><label><input name='maincourt' class='courtFilter' type='radio' value='" + data.OtherCourtList.CaseIds + "'><span>" +
				"" + data.OtherCourtList.CourtName + " </span></label><b class='case-count'>" + data.OtherCourtList.CaseCount + "</b>" +
				"</div><div class='filter-dropdown'><form class='' action='#' method='post'><ul>";

			if (data.OtherCourtList.CaseListViewModel != null) {
				for (var i = 0; i < data.OtherCourtList.CaseListViewModel.length; i++) {
					var bench = data.OtherCourtList.CaseListViewModel[i];
					courtlisthtml += "<li>";
					courtlisthtml += "<div class='radio radio-primary'><label><input  name='court' class='courtFilter' type='radio' value='" + bench.SubCourtName + "'><span>";
					if (bench.IsHaveSegregation === "N") {
						courtlisthtml += "" + bench.SubCourtName + "";
					} else {
						courtlisthtml += "" + bench.SubCourtName + "<img src='../Content/newtheme/img/idraf-icon.png' style='margin-left: 10px;' class='idraf-icon'/>";
					}
					courtlisthtml += "</span></label><b class='case-count'>" + bench.SubCourtCaseCount + "</b></div>";
					if (bench.SubCourtList !== null && bench.SubCourtList.length > 0) {
						courtlisthtml += "<div class='filter-dropdown'><form  class='' action='#' method='post'><ul>";
						for (var j = 0; j < bench.SubCourtList.length; j++) {
							var subbench = bench.SubCourtList[j];
							courtlisthtml += "<li>";
							courtlisthtml += "<div class='radio-item radio radio-primary'><label class='label'><input  name='subcourt' class='courtFilter' type='radio' value='" + subbench.SubCourtName + "'><span>";
							if (bench.IsHaveSegregation === "N") {
								courtlisthtml += "" + subbench.SubCourtName + "";
							} else {
								courtlisthtml += "" + subbench.SubCourtName + "<img src='../Content/newtheme/img/idraf-icon.png' style='margin-left: 10px;' class='idraf-icon'/>";
							}
							courtlisthtml += "</span></label><b class='case-count'>" + subbench.SubCourtCaseCount + "</b>";
							courtlisthtml += "</div></li>";
						}
						courtlisthtml += "</ul></form></div>";
					}
					courtlisthtml += "</li>";
				}
			}
			courtlisthtml += "</ul></form></div></li>";
		}

		courtlisthtml += "</ul></ul></div>";
		$('#court').show();
		$("#court").append($(courtlisthtml));

		$('.filter-list .radio label').on('click', function() {
			$('.filter-list .radio input:not(:checked)').parent().parent().siblings('.filter-dropdown').removeClass("open");
			$('.filter-list .radio input:checked').parent().parent().siblings('.filter-dropdown').addClass("open");
		});
	}

	function open__court__div(court_div) {
		$('.' + court_div).toggle(500);
	}
</script>