<!DOCTYPE html >
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no" />
	<style type="text/css">
		html {
			background-color: #E1E1E1;
			margin: 0;
			padding: 0;
		}

        @font-face {
            font-family: FedraSansPro-Demi;
            src: url('/fonts/FedraSansPro-Demi.ttf');
        }
        @font-face {
            font-family: SwiftC-Regular;
            src: url('/fonts/SwiftC-Regular.ttf');
        }
        .Swift{
            font-family: SwiftC-Regular !important;
        }
        
        .Fedra{
            font-family: FedraSansPro-Demi !important;
        }

		body,
		#bodyTable,
		#bodyCell,
		#bodyCell {
			height: 100% !important;
			margin: 0;
			padding: 0;
			width: 100% !important;
			font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
		}

		table {
			border-collapse: collapse;
		}

		table[id=bodyTable] {
			width: 100% !important;
			margin: auto;
			max-width: 500px !important;
			color: #7A7A7A;
			font-weight: normal;
		}

		img,
		a img {
			border: 0;
			outline: none;
			text-decoration: none;
			height: auto;
			line-height: 100%;
		}

		a {
			text-decoration: none !important;
			border-bottom: 1px solid;
			color: #fff
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			color: #5F5F5F;
			font-weight: normal;
			font-family: Helvetica;
			font-size: 20px;
			line-height: 125%;
			text-align: Left;
			letter-spacing: normal;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: 10px;
			margin-left: 0;
			padding-top: 0;
			padding-bottom: 0;
			padding-left: 0;
			padding-right: 0;
		}

		.ReadMsgBody {
			width: 100%;
		}

		.ExternalClass {
			width: 100%;
		}

		/* Force Hotmail/Outlook.com to display emails at full width. */

		.ExternalClass,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass font,
		.ExternalClass td,
		.ExternalClass div {
			line-height: 100%;
		}

		table,
		td {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}

		#outlook a {
			padding: 0;
		}

		img {
			-ms-interpolation-mode: bicubic;
			display: block;
			outline: none;
			text-decoration: none;
		}

		*/ .ExternalClass td[class="ecxflexibleContainerBox"] h3 {
			padding-top: 10px !important;
		}

		h1 {
			display: block;
			font-size: 26px;
			font-style: normal;
			font-weight: normal;
			line-height: 100%;
		}

		h2 {
			display: block;
			font-size: 20px;
			font-style: normal;
			font-weight: normal;
			line-height: 120%;
		}

		h3 {
			display: block;
			font-size: 17px;
			font-style: normal;
			font-weight: normal;
			line-height: 110%;
		}

		h4 {
			display: block;
			font-size: 18px;
			font-style: italic;
			font-weight: normal;
			line-height: 100%;
		}

		.flexibleImage {
			height: auto;
		}

		.linkRemoveBorder {
			border-bottom: 0 !important;
		}

		table[class=flexibleContainerCellDivider] {
			padding-bottom: 0 !important;
			padding-top: 0 !important;
		}

		body,
		#bodyTable {
			background-color: #E1E1E1;
		}

		#emailHeader {
			background-color: #E1E1E1;
		}

		#emailBody {
			background-color: #FFFFFF;
		}

		#emailFooter {
			background-color: #E1E1E1;
		}

		.nestedContainer {
			background-color: #F8F8F8;
			border: 1px solid #CCCCCC;
		}

		.emailButton {
			background-color: #205478;
			border-collapse: separate;
		}

		.buttonContent {
			color: #FFFFFF;
			font-family: Helvetica;
			font-size: 18px;
			font-weight: bold;
			line-height: 100%;
			padding: 15px;
			text-align: center;
		}

		.buttonContent a {
			color: #FFFFFF;
			display: block;
			text-decoration: none !important;
			border: 0 !important;
		}

		.emailCalendar {
			background-color: #FFFFFF;
			border: 1px solid #CCCCCC;
		}

		.emailCalendarMonth {
			background-color: #205478;
			color: #FFFFFF;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: bold;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
		}

		.emailCalendarDay {
			color: #205478;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 60px;
			font-weight: bold;
			line-height: 100%;
			padding-top: 20px;
			padding-bottom: 20px;
			text-align: center;
		}

		.imageContentText {
			margin-top: 10px;
			line-height: 0;
		}

		.imageContentText a {
			line-height: 0;
		}

		#invisibleIntroduction {
			display: none !important;
		}

		span[class=ios-color-hack2] a {
			color: #205478 !important;
			text-decoration: none !important;
		}

		span[class=ios-color-hack3] a {
			color: #8B8B8B !important;
			text-decoration: none !important;
		}

		.a[href^="tel"],
		a[href^="sms"] {
			text-decoration: none !important;
			color: #606060 !important;
			pointer-events: none !important;
			cursor: default !important;
		}

		.mobile_link a[href^="tel"],
		.mobile_link a[href^="sms"] {
			text-decoration: none !important;
			color: #606060 !important;
			pointer-events: auto !important;
			cursor: default !important;
		}

		@media only screen and (max-width: 480px) {
			body {
				width: 100% !important;
				min-width: 100% !important;
			}
			table[id="emailHeader"],
			table[id="emailBody"],
			table[id="emailFooter"],
			table[class="flexibleContainer"],
			td[class="flexibleContainerCell"] {
				width: 100% !important;
			}
			td[class="flexibleContainerBox"],
			td[class="flexibleContainerBox"] table {
				display: block;
				width: 100%;
				text-align: left;
			}
			td[class="imageContent"] img {
				height: auto !important;
				width: 100% !important;
				max-width: 100% !important;
			}
			img[class="flexibleImage"] {
				height: auto !important;
				width: 100% !important;
				max-width: 100% !important;
			}
			img[class="flexibleImageSmall"] {
				height: auto !important;
				width: auto !important;
			}
			table[class="flexibleContainerBoxNext"] {
				padding-top: 10px !important;
			}
			table[class="emailButton"] {
				width: 100% !important;
			}
			td[class="buttonContent"] {
				padding: 0 !important;
			}
			td[class="buttonContent"] a {
				padding: 15px !important;
			}
		}

		@media only screen and (-webkit-device-pixel-ratio:.75) {}

		@media only screen and (-webkit-device-pixel-ratio:1) {}

		@media only screen and (-webkit-device-pixel-ratio:1.5) {}

		@media only screen and (min-device-width: 320px) and (max-device-width:568px) {}
	</style>

</head>

<body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

	<center style="background-color:#E1E1E1;">
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
			<tr>
				<td align="center" valign="top" id="bodyCell">
					<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td align="center" valign="top">
											<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer" style="color:#FFFFFF;" bgcolor="#84afde">
												<tr>
													<td valign="top" width="500" class="flexibleContainerCell">
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
															<tr>
																<td align="left" valign="top" class="flexibleContainerBox">
																	<table border="0" cellpadding="0" cellspacing="0" width="90" style="max-width:100%;">
																		<tr>
																			<td align="left" class="textContent">
																				<img src="{{ asset('images/logo.png') }}" width="73" class="flexibleImageSmall" style="max-width:100%;" alt="Text" title="Text"
																				/>
																			</td>
																		</tr>
																	</table>
																</td>
																<td align="right" valign="middle" class="flexibleContainerBox">
																	<table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="350" style="max-width:100%;">
																		<tr>
																			<td align="left" class="textContent">
																				<h1 class="Swift" style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-weight:normal;margin-bottom:5px;text-align:center;">Swim Shop</h1>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td align="center" valign="top">
											<table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
												<tr>
													<td align="center" valign="top" width="500" class="flexibleContainerCell">
														<table border="0" cellpadding="30" cellspacing="0" width="100%">
															<tr>
																<td align="center" valign="top">
																	<table border="0" cellpadding="0" cellspacing="0" width="100%">
																		<tr>
																			<td valign="top" class="textContent">
																				<h2 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-weight:bold;margin-top:0;margin-bottom:3px;text-align:center;border-bottom: 1px solid #1c2945;color: #1c2945;padding-bottom:18px">Контактная информация !!!</h2><br>
																				<div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;margin-top:3px;color:#5F5F5F;line-height:135%;">
																					<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate;mso-table-lspace: 0;mso-table-rspace:0;width: 100%">
																						<tbody>
																							<div >
                                                                                                <p> Имя - {{ $name }} </p>
                                                                                                <p> Телефон - {{ $email }} </p>
                                                                                            </div>
																						</tbody>
																					</table>
																				</div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <h2 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-weight:bold;margin-top:0;margin-bottom:3px;text-align:center;border-bottom: 1px solid #1c2945;color: #1c2945;padding-bottom:18px">Продукты !!!</h2><br>
                                    @foreach($products as $p)
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer" bgcolor="#eee">
                                                    <tr>
                                                        <td valign="top" width="500" class="flexibleContainerCell">
                                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    
                                                                    <td align="left" valign="top" class="flexibleContainerBox">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="90" style="max-width:100%;">
                                                                            <tr>
                                                                                <td align="left" class="textContent">
                                                                                    <img src="{{ url('products/'.$p['id'].'/'.$p['images'][0]['name']) }}" width="73" class="flexibleImageSmall" style="max-width:100%;" alt="Text" title="Text" />
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td align="right" valign="middle" class="flexibleContainerBox">
                                                                        <table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="350" style="max-width:100%;">
                                                                            <tr>
                                                                                <td align="left" class="textContent">
                                                                                    <div style="text-align:center">
                                                                                        <p style="margin:0 auto">{{$p['name']}} - <b>{{$p['total']}}</b> RUB - {{$p['count']}} шт.</p>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>