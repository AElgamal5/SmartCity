<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nicePage.css') }}" media="screen">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    @if (request()->route()->getName() == 'home')
        <link rel="stylesheet" href="{{ asset('css/homePage.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'about')
        <link rel="stylesheet" href="{{ asset('css/about.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.login' ||
        request()->route()->getName() == 'employee.login' ||
        request()->route()->getName() == 'admin.login')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'forgotPassword')
        <link rel="stylesheet" href="{{ asset('css/forgotPassword.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'contactUs')
        <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen')
    <link rel="stylesheet" href="{{ asset('css/panel2.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.dashboard')
        <link rel="stylesheet" href="{{ asset('css/cdashboard.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.dashboard')
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.changePassword' ||
        request()->route()->getName() == 'employee.changePassword' ||
        request()->route()->getName() == 'admin.changePassword')
        <link rel="stylesheet" href="{{ asset('css/changePassword.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.apartment')
        <link rel="stylesheet" href="{{ asset('css/apartment.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.apartment.payment')
        <link rel="stylesheet" href="{{ asset('css/payment.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.bank' ||
        request()->route()->getName() == 'citizen.bank.trans')
        <link rel="stylesheet" href="{{ asset('css/bank.css') }}" media="screen">
        {{-- @elseif (request()->route()->getName() == 'citizen.job')
        <link rel="stylesheet" href="{{ asset('css/job.css') }}" media="screen"> --}}
    @elseif (request()->route()->getName() == 'citizen.car')
        <link rel="stylesheet" href="{{ asset('css/car.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee' ||
        request()->route()->getName() == 'admin')
        <link rel="stylesheet" href="{{ asset('css/employee.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.care.show')
        <link rel="stylesheet" href="{{ asset('css/careprofile.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.profile' ||
        request()->route()->getName() == 'admin.profile' ||
        request()->route()->getName() == 'citizen.care.show')
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.editCitizens' ||
        request()->route()->getName() == 'employee.citizenCare' ||
        request()->route()->getName() == 'employee.jobs' ||
        request()->route()->getName() == 'employee.forgetPasswords' ||
        request()->route()->getName() == 'employee.cars' ||
        request()->route()->getName() == 'employee.iots' ||
        request()->route()->getName() == 'admin.employees' ||
        request()->route()->getName() == 'employee.citizenRequests')
        <link rel="stylesheet" href="{{ asset('css/editCitizens.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.addCitizen' ||
        request()->route()->getName() == 'employee.editCitizen' ||
        request()->route()->getName() == 'employee.addCitizenCare' ||
        request()->route()->getName() == 'employee.editCitizenCare' ||
        request()->route()->getName() == 'employee.addBankAccount' ||
        request()->route()->getName() == 'employee.editBankAccount' ||
        request()->route()->getName() == 'employee.addBankTrans' ||
        request()->route()->getName() == 'employee.editBankTransaction' ||
        request()->route()->getName() == 'employee.addRoad' ||
        request()->route()->getName() == 'employee.editRoad' ||
        request()->route()->getName() == 'employee.addStartRoad' ||
        request()->route()->getName() == 'employee.employee.addLand')
        <link rel="stylesheet" href="{{ asset('css/addCitizen.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.sos')
        <link rel="stylesheet" href="{{ asset('css/police.css') }}" media="screen">
        {{-- @elseif (request()->route()->getName() == 'employee.citizenRequests')
        <link rel="stylesheet" href="{{ asset('css/citizensRequests.css') }}" media="screen"> --}}
    @elseif (request()->route()->getName() == 'admin.statistics')
        <link rel="stylesheet" href="{{ asset('css/statistics.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'employee.electricity' ||
        request()->route()->getName() == 'employee.water' ||
        request()->route()->getName() == 'employee.gas' ||
        request()->route()->getName() == 'employee.complaints' ||
        request()->route()->getName() == 'employee.appointments')
        <link rel="stylesheet" href="{{ asset('css/bills.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'eGovernment')
        <link rel="stylesheet" href="{{ asset('css/eGovernment.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.certficateOfBirth')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
        <link rel="stylesheet" href="{{ asset('css/certficateOfBirth.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.idCard')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
        <link rel="stylesheet" href="{{ asset('css/idCard.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.drivingLicense')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js">
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
        <link rel="stylesheet" href="{{ asset('css/drivingLicense.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.appointmentReservation')
        <link rel="stylesheet" href="{{ asset('css/appointmentReservation.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.compliment')
        <link rel="stylesheet" href="{{ asset('css/compliment.css') }}" media="screen">
    @elseif (request()->route()->getName() == 'citizen.showContract')
        <link rel="stylesheet" href="{{ asset('css/contract.css') }}" media="screen">
    @endif
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>

    <link rel="shortcut icon"
        href="{{ asset('images/kisspng-letter-computer-icons-letter-e-5abfa798001415.6134645015225097200004-2.png') }}"
        type="image/x-icon">
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site1",
            "sameAs": []
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="HomePage">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
    @include('incs.mainHeader')
    @include('incs.flash-message')
    @yield('content')
    @include('incs.mainFooter')
</body>

</html>
