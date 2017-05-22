<?php

class My_library {

    function heading_for_page($value_) {
        switch ($value_) {
            case 1:
                $data['title'] = 'Auraveda Wellness, Panchkarma, Beauty Therapies';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Home Page - Auraveda';
                break;
            case 2:
                $data['title'] = 'About Auraveda Wellness, Panchkarma, Beauty Therapies';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'About Us - Auraveda at a Glance';
                break;
            case 3:
                $data['title'] = 'Photo Gallery Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Photo Gallery';
                break;
            case 4:
                $data['title'] = 'Services of Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                break;
            case 5:
                $data['title'] = 'Membership of Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Membership Packages';
                break;
            case 6:
                $data['title'] = 'Basic Principles of Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Basic Principles';
                break;
            case 7:
                $data['title'] = 'Ayouvedic Methodology of Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'AYURVEDIC METHODOLOGY';
                break;
            case 8:
                $data['title'] = 'Role of Panchkarma in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'ROLE OF PANCHKARMA';
                break;
            case 9:
                $data['title'] = 'Concept of Rejuvenation in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'CONCEPT OF REJUVENATION';
                break;
            case 10:
                $data['title'] = 'Types of Therapies in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'TYPE OF THERAPIES';
                break;
            case 11:
                $data['title'] = 'Types of Medicine in Ayurveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'TYPES OF MEDICINES IN AYURVEDA';
                break;
            case 12:
                $data['title'] = 'Book Appointment in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'GET AN APPOINTMENT';
                break;
            case 13:
                $data['title'] = 'Careers opportunities in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'JOIN US FOR AN ASPIRING CAREER OPPORTUNITY';
                break;
            case 14:
                $data['title'] = 'Location of Ayurveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Location';
                break;
            case 15:
                $data['title'] = 'Gift a Card in Auraveda Wellness';
                $data['metadesc_'] = 'Auraveda is a center for alternative medicine, located in Kalkaji, New Delhi and is devoted to our age–old Indian system of medicine, Ayurveda, with holistic approach of health care.'; // 150 to 160 char Max including spaces
                $data['pagename'] = 'BUY GIFT CARDS FOR YOUR LOVED ONES';
                break;
            default:
                $data['title'] = 'Heading Error';
                $data['metadesc_'] = ''; // 150 to 160 char Max including spaces
                $data['pagename'] = 'Error';
        }
        return $data;
    }

}
