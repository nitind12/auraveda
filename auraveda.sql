-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 04:11 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auraveda`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME_` varchar(40) NOT NULL,
  `PASSWORD_` varchar(25) NOT NULL,
  `USER_STATUS` varchar(5) NOT NULL,
  `BLOCK` tinyint(1) NOT NULL DEFAULT '1',
  `USER_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `USER_STATUS`, `BLOCK`, `USER_`) VALUES
('naveen', '123', 'adm', 1, 'nitin'),
('nitin', '123', 'adm', 0, 'nitin'),
('user1', '123', 'usr', 0, 'nitin'),
('user2', '123', 'usr', 0, 'nitin'),
('user3', '123', 'usr', 0, 'nitin'),
('user4', '123', 'usr', 0, 'nitin'),
('user5', '123', 'usr', 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `SID` int(11) NOT NULL,
  `CATEGID` int(11) NOT NULL,
  `SERVICE` varchar(200) NOT NULL,
  `DESC_` text NOT NULL,
  `STATUS` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`SID`, `CATEGID`, `SERVICE`, `DESC_`, `STATUS`) VALUES
(3, 3, 'Ayurvedic Doctor', 'Ayurvedic Doctor', 1),
(4, 4, 'Arthritis Spectrum', 'Arthritis Spectrum', 1),
(5, 4, 'Spine &amp; Joint Care', 'Spine &amp; Joint Care', 1),
(6, 4, 'Musculoskeletal Care', 'Musculoskeletal Care', 1),
(7, 4, 'Obesity &amp; Weight Management', 'Obesity &amp; Weight Management', 1),
(8, 4, 'Gastro-Intestinal Diseases', 'Gastro-Intestinal Diseases', 1),
(9, 4, 'Natural Stress Care', 'Natural Stress Care', 1),
(10, 4, 'Fast Stress Stopgap', 'Fast Stress Stopgap', 1),
(11, 4, 'Insomania &amp; Depression Care', 'Insomania &amp; Depression Care', 1),
(12, 4, 'Respiratory, Sinusitis Care', 'Respiratory, Sinusitis Care', 1),
(13, 4, 'Special Neurological Care', 'Special Neurological Care', 1),
(14, 5, 'Wellness Care', 'Wellness Care', 1),
(15, 6, 'Ayurvedic Facials', 'Ayurvedic Facials', 1),
(16, 7, 'Post-Fracture Treatment Package', 'Post-Fracture Treatment Package', 1),
(17, 7, 'Old Age care Package', 'Old Age care Package', 1),
(18, 7, 'Pragnancy-Before &amp; After-Care Package', 'Pragnancy-Before &amp; After-Care Package', 1),
(19, 7, 'For Sports-Gym-Fitness Sector', 'For Sports-Gym-Fitness Sector', 1),
(20, 7, 'For IT-Office-Goers', 'For IT-Office-Goers', 1),
(21, 8, 'Summer Treatments', 'Summer Treatments', 1),
(22, 8, 'Winter Treatments', 'Winter Treatments', 1),
(23, 8, 'Seasonal Detox-Package to Prevent Lifestyle Disorders', 'Seasonal Detox-Package to Prevent Lifestyle Disorders', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORY` varchar(200) NOT NULL,
  `DESC_` text NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  `SID_FOR_MENU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`CATEGID`, `CATEGORY`, `DESC_`, `STATUS`, `SID_FOR_MENU`) VALUES
(3, 'Doctor Consultation', 'Doctor Consultation', 1, 3),
(4, 'Heal Your Problem', 'Heal Your Problem', 1, 4),
(5, 'Wellness Therapies', 'Wellness Therapies ', 1, 14),
(6, 'Beauty Therepies', 'Beauty Therepies', 1, 15),
(7, 'Special Packages', 'Special Packages', 1, 16),
(8, 'Seasonal Packages', 'Seasonal Packages', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `SDEID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `ABOUT` text NOT NULL,
  `_DEFINE_` text NOT NULL,
  `INCLUDES` text NOT NULL,
  `BENEFITS` text NOT NULL,
  `DURATION` varchar(100) NOT NULL,
  `VAREITY` text NOT NULL,
  `TIME` varchar(100) NOT NULL,
  `FEE` varchar(100) NOT NULL,
  `FREE_` varchar(100) NOT NULL,
  `DISCOUNT_` varchar(100) NOT NULL,
  `PIC1_PATH` varchar(150) NOT NULL,
  `PIC2_PATH` varchar(150) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`SDEID`, `SID`, `ABOUT`, `_DEFINE_`, `INCLUDES`, `BENEFITS`, `DURATION`, `VAREITY`, `TIME`, `FEE`, `FREE_`, `DISCOUNT_`, `PIC1_PATH`, `PIC2_PATH`, `STATUS`, `DATE_`) VALUES
(20, 3, '•    Ayurvedic consultation at AURAVEDA is a personalized assessment through an in-depth evaluation of your state of health, lifestyle practices, physical attributes, current and past situation, natural cravings, character, personality, possibilities or tendencies towards diseases by utilizing the healing philosophy and insights of Ayurveda to understand your unique body constitution, which is known as “Prakruthy” in Ayurveda. It eventually helps in correcting the root causes of imbalances, and in modification of your lifestyle that honor body, mind, and spirit as a whole.\r\n•    Ayurvedic practitioners determine the patient’s primary Dosha and the balance among the three Doshas by:', '•   Asking about your diet, behavior, lifestyle practices, recent illnesses (including reasons and symptoms), and resilience (ability to recover quickly from illness or setbacks).\r\n•   Observing such physical characteristics as teeth and tongue, skin, eyes, weight, and overall appearance.\r\n•   Checking the Pulse, Speech, Voice, texture, urinary status & defecation etc….........................................................', '•    Body type Assessment\r\n•    Advice on Panchakarma\r\n•    Advice on other therapies\r\n•    Diet counseling\r\n•    Prescription of Medicines\r\n•    Discussion on Yoga and Pranaayama\r\n•    Suggestions in Lifestyle modification', '•  Based on each personalized consultation, our practitioner will recommend you understand various corrective and preventive steps to treat the problems to maintain the harmony in you. Mainly a course of treatment plan of external therapies with or without oral medications and recommendations for integrating necessary lifestyle modifications, yoga practices and diet advices will be there added into your healing journey. ', 'x', '• x', '30 – 45 min', 'Rs 250', 'Lifestyle Tips', 'x', '_20_doctors.jpg', 'x', 1, '2017-01-15 06:15:39'),
(21, 4, '• Most common disorders affecting joints are degenerative disease conditions like, Cervical spondylosis, Lumbar spondylosis, Ankylosisng spodylosis, Knee disorders like  Osteoarthiritis, Rheumatoid Arthiritis, Osteoporosis, Autoimmune disorders.\r\n• According to Ayurveda stability of the Joint  is under  Kapha Dosha and the movements are controlled by Vata Dosha. Any inflammatory condition affecting joints are due to vitiated Pitta Dosha. In Ayurveda effective management of these conditions with natural herbal remedies and strengthening, rejuvenating therapies have clearly explained. There are special anti- inflammatory Ayurvedic medicines, which can reduce the painful inflammatory condition and effectively substitute NSAIDS in modern medicines. Main advantage of Ayurvedic treatment is maximum results without side effects and can manage conditions without surgery.', '• “सन्धि स्थैर्य” – ARTHRITIS CARE - Auraveda Special therapies & medications can safely and effectively reduce inflammation in your joints; it relieves pain and prevents joint damage.', '• Abhyangam (Head to toe oleation with Ayurvedic medicinal oils according to your body type).\r\n• Taila Pichu (Oily Cotton padding)/ Bandha (Bandaging) OR\r\n• Lepana (Medicated herbal paste application) with Bandha(Bandaging)\r\n• Janu Vasti (Joint care treatment in case of knees)\r\n• Vasti  (Kashaya/ matra/ Ksheera vasthy - Special Panchakarma therapy As decided by the Doctor)\r\n• Swedana (Herbal/Normal steam bath)', '• Effective in reducing the complaints of joint pain, stiffness, redness, swellings and limited movements related with Arthritis.\r\n• Auraveda Special Arthritis therapies & medicines efficiently prevent further joint damage and maintain the normalcy in your joints.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_21_1_Wrist-arthritis.jpg', '_21_2_asthama1.jpg', 1, '2017-01-15 06:21:35'),
(22, 5, '• Most common disorders affecting joints are degenerative disease conditions like, Cervical spondylosis, Lumbar spondylosis, Ankylosisng spodylosis, Knee disorders like  Osteoarthiritis, Rheumatoid Arthiritis, Osteoporosis, Autoimmune disorders. \r\n• According to Ayurveda stability of the Joint  is under  Kapha Dosha and the movements are controlled by Vata Dosha. Any inflammatory condition affecting joints are due to vitiated Pitta Dosha. In Ayurveda effective management of these conditions with natural herbal remedies and strengthening, rejuvenating therapies have clearly explained. There are special anti- inflammatory Ayurvedic medicines, which can reduce the painful inflammatory condition and effectively substitute NSAIDS in modern medicines. Main advantage of Ayurvedic treatment is maximum results without side effects and can manage conditions without surgery.', '• “पृष्ठ रक्ष्य” - The COMPLETE SPINAL CARE (Sciatica, Lumbar & cervical spondylitis, and other related difficulties)', '• Abhyangam (Head to toe oleation with Ayurvedic medicinal oils according to your body type)\r\n• Potli (Special Bolus therapy with bundle of herbs with oil /herbal powder)\r\n• Kadee Vasti OR Greeva Vasti (Localized therapy for back OR neck as decided by the Doctor)\r\n• Vasti  (Kashaya/ matra/ Ksheera vasthy - Special Panchakarma therapy As decided by the Doctor)\r\n• Swedana (Herbal/Normal steam bath)', '• Treats and cures the spinal and all related problems including all other major joints.\r\n• Release muscle stiffness, reduce the numbness, pain, fatigue, increase the mobility & flexibility', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_22_1_spine-care1.jpg', '_22_2_spine-care.jpg', 1, '2017-01-15 06:24:29'),
(23, 6, '• • Most common disorders affecting joints are degenerative disease conditions like, Cervical spondylosis, Lumbar spondylosis, Ankylosisng spodylosis, Knee disorders like  Osteoarthiritis, Rheumatoid Arthiritis, Osteoporosis, Autoimmune disorders. \r\n• According to Ayurveda stability of the Joint  is under  Kapha Dosha and the movements are controlled by Vata Dosha. Any inflammatory condition affecting joints are due to vitiated Pitta Dosha. In Ayurveda effective management of these conditions with natural herbal remedies and strengthening, rejuvenating therapies have clearly explained. There are special anti- inflammatory Ayurvedic medicines, which can reduce the painful inflammatory condition and effectively substitute NSAIDS in modern medicines. Main advantage of Ayurvedic treatment is maximum results without side effects and can manage conditions without surgery.', '• सन्ध्यस्थि जीवनम्” - The complete Musculoskeletal Care Package...', '• Abhyanga (Head to toe oleation with Ayurvedic medicinal oils according to your body type) \r\n• Podikizhi/Elakizhi/Pizhichil  (as decided by the Doctor\r\n• Kadi/  Merudanda/ Griva Vasti / Pichu / Januvasthy/ Lepana/ Bandage. (as decided by the Doctor)\r\n• Swedana (Herbal steam bath)\r\n• Vasti  (Kashaya/ matravasthy – Special course of Panchakarma therapy as decided by the Doctor)', '• Indicated in the treatment of  Back Pain, Lumbar  and cervical Spondylosis, Sciatica, Inter Vertebral Disc Prolapse, Herniated Disc, Spinal canal stenosis,  Degenerative disc diseases, Sacroilitis, Ankylosing Spondylitis, Osteoporosis, Fibromyalgia, Paralysis etc.\r\n• Remove muscle weakness and nerves compressions and associated radiculopathy.\r\n• Treats and prevents the problem with repeated courses and our oral medications.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_23_1_musculoskeletal.jpg', '_23_2_musculoskeletal1.png', 1, '2017-01-15 06:30:17'),
(24, 7, '• x', '• “स्थौल्य शस्य” - Obesity care: To Reduce overweight, obesity, and related health problems', '• Udwarthanam (Therapeutic herbal powder scrubbing with Taila abhyanga-Oil Application)\r\n• Podikizhi  (Special Bolus therapy with bundle of herbal powder)\r\n• Panchakarma – Nasya or Vasthy (as suggested by the doctor)\r\n• Virechana –(if suggested by the doctor)\r\n• Swedana (Herbal/ Normal steam bath)', '• Personalized approach to find out the causes of Obesity and treating the problem with pure herbal medicines and diet plans.\r\n• Helps to reduce weight and also in long term weight control to maintain a good health.\r\n• Reduces and prevents problems like hyperlipidemia, PCOS, Hypothyroidism, low energy etc.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', 'x', '_24_2_weightmgmt1.jpg', 1, '2017-01-15 06:37:55'),
(25, 8, '• Acidity, heart burn, burping, bloating in the stomach; we\'ve all suffered from it at some point or the other. Isn’t it? Acidity, heart burn, burping, bloating in the stomach; we\'ve all suffered from it at some point or the other. Isn’t it? Ayurveda considers indigestion to be the root cause of almost all diseases. So proper management of digestive disorders, in the initial stage itself prevents the onset of many other major illnesses in later stages of life.\r\n• Gastritis:<br />Excessive or Digestive juices damage and inflamed stomach lining and results burning pain, vomiting sensation, abdominal bloating. Bacteria, hurry, worry, curry are common causes. Auraveda give you solutions in the form of Panchakarma therapies and medicines.\r\n• Chronic Constipation : <br /> Inadequate water & fiber intake, lack of exercise, thyroid disease, IBS, anal fissure, certain medications can result in constipation. Favor greens, curry leaves, coriander, fenugreek, beans, brinjal, onions, raddish, butter milk and yam.\r\n• Hemorrhoids : <br /> Also called piles, are swollen and inflamed veins in your anus. Long time sitting, chronic diarrhea or constipation, obesity, pregnancy, low fiber diet and straining on bowels are the causes. Regular use of small onions, yam, buttermilk, milk are effective in early stages.\r\n• Fistula in Ano : <br />An infected tunnel that develops between the perianal skin (skin around anus) with an internal opening inside the anus. Signs and symptoms are pus or blood discharge from a small opening around anus; constant pain, swelling, irritation around anus; pus or blood discharge with stool etc. Traditional medicines and Kshara sutra are effective in the management of Fistula.\r\n• Fissure : <br />A small tear in the anus. An anal fissure may occur when you pass hard or large stools. Anal fissures cause pain and bleeding with bowel movements. You may also experience spasm at the end of your anus. Laxatives, medicines, anal dilation are the line of treatment. Soaking in warm water, infiltration or application of medications, are effective treatments. Anorexia, fatty liver case are also being treated at Auraveda', '• x', '• x', '• x', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_25_1_Digestion.jpg', 'x', 1, '2017-01-15 06:41:25'),
(26, 9, '• “निर्वाण” – The Complete Natural Stress Care\r\n• Stress ages us. Stress hormones shut down natural processes the body relies on to refresh itself and stay young. This means stress slows healing and makes many diseases worse.  Stress also sets the stage for anxiety and depression by burning out our "stress thermostat". Modern age is the age of stress and strain. The fast life is exciting as well as overtaxing.\r\n• The holistic approach of Ayurveda tackles these hazards in its own natural way. Stress management treatments focus on the impact of the mind on body, and vice versa. Carefully planned programs such as soothing massages, Pizhichil, Sirodhara, etc., works at the physical level to soothe the aching muscles and tensed nerves. At the same time, individually yoga, meditation and pranayama  programs calm down the mind and bring back the natural rhythm of the mind and body.\r\n• Our therapies are\r\n• Effective in removing stress and thereby treats anxiety, depression, and memory loss.\r\n• Increases concentration power and improves the quality of sleep.', '• x', '• Abhyangam (Head to toe oleation with Ayurvedic medicinal oils according to your body type).\r\n• Shirodhara (Dripping of Ayurvedic medicinal Oil or Thakram (Medicated butter milk) or Kwath with Ksheera (Herbal decoction with milk) on the forehead as decided by our Doctor.\r\n• Swedana (Herbal/ Normal steam bath).', '• x', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_26_1_Stress.jpg', '_26_2_Stress1.jpg', 1, '2017-01-15 06:46:50'),
(27, 10, '• x', '• “ह्र्स्व मुक्तिदा” – The Fast Stress Stopgap', '• Murdhna Abhyangam (Relaxing anoint on Head, face and neck with Ayurvedic oils/creams)\r\n• Dvipaada Abhyangam (Foot reflexolgy / Anointing lower half of both the legs and foot)\r\n• Shirodhara (Dripping therapy on the forehead with Ayurvedic medicinal oil)', '• Quick relief to stress, Induces good sleep and calmness to the mind.\r\n• It is our immediate stress buster - short duration package.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_27_1_relaation.jpg', '_27_2_relaation1.jpg', 1, '2017-01-15 06:48:51'),
(28, 11, '• x', '• “शान्ति देय” – Insomnia & Depression care – \r\nSpecially designed for Depression cases and to treat all types of Sleep, mood & behavioural disorders, hypertension, headaches etc.', '• Abhyangam (Head to toe oleation with Ayurvedic medicinal oils according to your body type)\r\n• Shirodhara (Dripping of Ayurvedic medicinal Oil or Thakram (Medicated butter milk) or Kwath with Ksheera (Herbal decoction with milk) on the forehead as decided by our Doctor\r\n• Swedana (Herbal/ Normal steam bath)\r\n• Panchakarma – Nasya or Vasthy (as suggested by the doctor)', '• x', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_28_1_insomnie.jpg', '_28_2_insomnie1.jpg', 1, '2017-01-15 06:50:46'),
(29, 12, '• x', '• पन्चेन्द्रियदा” – The “special sense care” Package', '• Abhyangam (Head to toe oleation with Ayurvedic medicinal oils according to your body type)\r\n• Ayurvedic Facial - (Special Ayurvedic Facial therapy) -40min\r\n• Murdhna Abhyangam (Head treatment with herbal oil)\r\n• Nasyam (Instillation of medicinal oil drops through nose )\r\n• Karna poorana (Special Ayurvedic Ear care therapy)\r\n• Talam (Application of Medicinal paste on crown)\r\n• Swedana (Herbal/Normal steam bath)', '• Treats different types of headaches due to Migraine, Sinusitis, Tension & Cluster headaches and pain in ears. Improve skin complexion. It also cleanses your skin well and makes it smooth and soft. It will make your skin glowing for a long time. Cleanses all the senses and improve the functionality to make them sharp.', '90 min', '• x', '2 to 4 weeks', '2000-3000', 'x', 'x', '_29_1_asthama.jpg', '_29_2_asthama1.jpg', 1, '2017-01-15 06:52:29'),
(30, 13, '•  x', '•  “जीवनीय” - Special Neurological Care Package', '•  Talam  (Application of medicated paste on the crown)\r\n•  Abhyanga (Head to toe oleation with Ayurvedic medicinal oils according to your body type)\r\n•  Njavara Kizhi / Narangakizhi etc  (Special bolus therapy as advised by the doctor )\r\n•  Shirodhara with milk/ oil (Dripping therapy on the forehead with Ayurvedic medicinal oil)\r\n•  Ksheera Dhooma (Special Herbal steaming)', '•  Designed for increasing the muscle tone and reduces the tremors and spasm.\r\n•  Make the body movements more easier and with more control.\r\n•  Weakness of the body parts complaints like tremor, speech impairment, reduced sensation.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_30_1_Nasyam.jpg', '_30_2_Nasyam1.jpg', 1, '2017-01-15 06:54:54'),
(31, 14, '• The "Auraveda Wellness Therapies” are specially designed treatment modalities specifically to reduce the physical and mental sufferings to a great extent, control several dreaded disabilities, ward off the middle age syndrome. These will delay the aging process and provide unlimited definite curative effects in the body and mind mainly by repairing the worn out tissues.', '• In repeated courses, these wellness maintaining therapies helps in revitalizing the body, increasing the memory as well as intelligence, improving vigor and vitality to make oneself physically and mentally fit.\r\n• Our priority is to extend your \'health span\', giving a better quality of life to the years that we have. We believe that wellness therapy - a key to positive health - shall be a part of our routines.So we have designed our Wellness Membership programmes for health seekers.', '• x', '• x', '30 min - 1 Hr - 2.5 Hr', '• x', 'x', 'Rs 500 - Rs 1500 - Rs 2000 - Rs 3000', 'x', 'x', '_31_1_slider-aboutus1.jpg', '_31_2_services3.jpg', 1, '2017-01-15 06:58:19'),
(32, 15, '•  Beauty is the desire of every individual to give pleasure to the sense. Beauty consciousness and the knowledge of application of different herbs, fruits, minerals and animals products are as old phenomena as the human existence. Beauty of person gives perceptual experience of pleasure or satisfaction. Ayurveda never isolate the involvement of mental and spiritual well being from the concept of beauty. As Ayurveda relates to every aspect of the mind, body and the soul, it considers beauty as an intimate part of the human personality. ', '•  Facial Massage : In the Ayurvedic tradition, “Abhyanga” (massage) is considered essential to health and beauty as good diet and other lifestyle habits. An Ayurvedic facial massage (Mukha Abhyanga) activates deep centers of the brain, reflex points and facial circulation to totally soothe the body. Tensions in the neck, shoulders and face are freed and energy is rebalanced from head to toe. Classical Ayurvedic oils may be added for their additional healing properties.', '• x', '•  Face Packs : To serve the purpose of getting fast natural beauty with a faster and deeper cleansing, we have formulated Auraveda Special Natural facial packs for different skin types. They contain natural ingredients, which have potential to be used as anti oxidant compounds, moisturizers with soothing and emollient properties. Many also contain vitamin A, B6, B12 and E which are proved to be essential for better skin texture, complexion and its maintenance. ', 'x', '• Auraveda Natural Face Pack: Dur 50 min.\r\n• The Complete Facial care: Dur 1 Hour 15 min (Includes Head, face massage and face pack.\r\n• Herbal facial with Shirodhara – Dur -1 Hour 30 min.', 'x', 'Option 1(50min): Rs.1000 ~ Option 2(1 Hour 15 min): Rs.1200 ~ Option 3 (1 Hour 30 min):  Rs.3000', 'x', 'x', '_32_1_popular-procedure-ayurveda-main.jpg', '_32_2_services2.jpg', 1, '2017-01-15 07:15:28'),
(33, 16, '• x', '• “भग्न सन्धानीय” - Fracture Rehabilitation Care Package.', '• Abhyanga (Full body oleation therapy with special medicated oil)\r\n• Kizhi  (Different kinds of Bolus therapies as per Doctor’s advice)\r\n• Local Pizhichil (Special Oil Dripping therapy )\r\n• Local Pichu (Cotton Padding with oil)/Lepana and Bandha (Paste application & Bandage)\r\n• Swedana (Herbal/ Normal steam bath) – If needed as per Doctor’s advice', '• These will help to reduce inflammatory pathology and increase blood circulation to bones making the reunion faster, and increases the mobility, strength and stability of the bones and joints.\r\n• Helps in rehabilitation and restore the functional abilities of the Individual.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.2000 to 3000', 'x', 'x', '_33_1_postfract1.jpg', '_33_2_postfract.png', 1, '2017-01-15 09:15:17'),
(34, 17, '•  Ayurveda, the Indian traditional holistic health science has got the potential for prevention of diseases by promotion of health and management of diseases occurring in old age. Prevention and management of health problems could help the elderly to improve quality of life and remain self dependant for their daily activities to maximum possible extent. Ayurveda has broad spectrum of preventing measures for combating the ageing process. Geriatrics or Jarachikitsa or Rasayana in Ayurveda is a unique therapeutic methodology to delay ageing and to minimize the intensity of problems occuring this degenerative phase of one\'s life.', '•  Neurological/ neurodegenerative disorders like Parkinson’s Disease, Hemiplegia, Neuro psychiatric diseases like Anxiety neurosis, Depression, Insomnia, dementia, other diseases of constipation , indigestion, osteoporosis, osteoarthritis, Benign prostate hypertrophy, menopausal syndromes in ladies etc are effectively managed in Ayurveda with various kinds of external and internal treatments. The main goals of rehabilitation are to prevent complications of bed rest and promote self dependence. Unnecessary bed rest and immobility lead to negative psycho-physiological changes i.e.\r\n•  Reduction of the muscle strength, endurance, joint mobility and functional reverse of musculoskeletal system\r\n•  Deminition of the functional capacity of cardiovascular system\r\n•  Thrombotic complication\r\n•  Intellectual deficit and emotional disturbances\r\n•  Peripheral neuropathy\r\n•  Weakness etc.\r\n•  The following conditions need rehabilitation in elderly patients<br />\r\n1. Arthritis<br /> \r\n2. Stroke<br /> \r\n3. Parkinson\'s disease<br /> \r\n4. Fractures<br /> \r\n5. Depression<br /> \r\n6. Memory deficit<br />', '•  Abhyanga (Head to toe full body oleation therapy)\r\n•  Potli with medicated Powder/Navara (Hot compress)\r\n•  Kadivasthi/Pichu (For low back or neck)\r\n•  Swedana (Herbal or normal steam bath)\r\n•  Matravasthy/Kashayavasthy (Medicated oil or decoction enema)', '•  Successful application of Pancakarma procedures like snehana (oleation), swedana (fomentation) etc., yoga practices and active exercises to enhance orthostatic stability, daily endurance, exercise to maintain aerobic capacity or specific resistance exercise to maintain musculoskeletal integrity constitute effective rehabilitation management of elderly patients.', '1.00 - 1.30 hrs', '•  x', '2 to 4 weeks', 'Rs.1500 to 3000', 'x', 'x', '_34_1_old.jpg', '_34_2_Old1.jpg', 1, '2017-01-15 09:24:49'),
(35, 18, '• x', '• “गर्भिणि परिचर्या”: Pre-natal care in Ayurveda', '• Mild Abhyangam (Head to toe oleation therapy with the Ayurvedic oil suggested by our Doctor)\r\n• Shirodhara (Dripping of specialized herbal oil on the forehead)', '• Reduce anxiety, stress\r\n• Promote sleep and good health\r\n• Reduce flab', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_35_1_pregn.jpg', '_35_2_pregn1.jpg', 1, '2017-01-15 09:27:08'),
(36, 19, '• Modern research confirms that too much exercise can create free radicals and damage the body. Excess free radicals have been linked to over 80% of degenerative disease as well as premature ageing. According to Ayurveda, one should not use more than 50 percent of your total capacity and that capacity depends on daily fluctuations of energy, change of the seasons, age, and body type. Exercising beyond one\'s capacity can create imbalance in mind and body, and do more harm than good from the Ayurvedic perspective. Sports and fitness persons are subjected to hard excerise and training sechedules which results in damage of muscle ligaments and tissues, as time progress the damaged muscle ligaments and tissues becomes in plastic stage losing its elasticity. Ayurveda has very good treatments and medicines.', '• Vata types need less exercise, so lighter activities such as walking are best.\r\n• Pitta types need moderate amounts, swimming and skiing.\r\n• Kapha types need more intense exercise, such as jogging and aerobics, in order to stay in balance.', '• Abhyanga (Head to toe oleation with Ayurvedic medicinal oils according to your body type)\r\n• Podikizhi/Elakizhi/Pizhichil  (as decided by the Doctor)\r\n• Kadi/  Merudanda/ Griva Vasti / Pichu / Januvasthy/ Lepana/ Bandage. (as decided by the Doctor)\r\n• Swedana (Herbal steam bath)\r\n• Vasti  (Kashaya/ matravasthy – Special course of Panchakarma therapy as decided by the Doctor)', '• “सन्ध्यस्थि जीवनम्” - The complete Musculoskeletal Care Package - \r\nBenefits:\r\n• Indicated in the treatment of  Back Pain, Lumbar  and cervical Spondylosis, Sciatica, Inter Vertebral Disc Prolapse, Herniated Disc, Spinal canal stenosis,  Degenerative disc diseases, Sacroilitis, Ankylosing Spondylitis, Osteoporosis, Fibromyalgia, Paralysis etc. \r\n• Remove muscle weakness and nerves compressions and associated radiculopathy. \r\n• Treats and prevents the problem with repeated courses and our oral medications.', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_36_1_sport.jpg', '_36_2_services3.jpg', 1, '2017-01-15 09:30:49'),
(37, 20, '• About 70 to 80% our population is involved either directly or indirectly to IT and Management sectors.  Definitely the huge pay packages and incentives are tempting and the worrying fact about this is its happening at the cost of their health. This can be named as Occupational Health Hazards in Medicine. Joint injuries, arthritic problems, Stress related diseases and of course lifestyle disorders like obesity etc follows this. These are of different stages for this stress related health hazards manifestations. Increased heart and respiratory rate, disturbed digestion, emotional imbalances, weakening of Immune system are seen in the beginning stages. Headache, sleeplessness, skin disorders, decreased sexual interest and increased infections due to collapsed immune system all happens in stage 2. Stress is the major reason even for skin diseases like Psoriasis. Ultimately one become irritable, aggressive, restless, inefficient and always withdrawn and moody with an uncontrollable urge to cry and finally leading to a mental collapse.', '• x', '• Mild Abhyangam (Head to toe oleation therapy with the Ayurvedic oil suggested by our Doctor)\r\n• Shirodhara (Dripping of specialized herbal oil on the forehead)', '• Reduce anxiety, stress\r\n• Promote sleep and good health\r\n• Reduce flab', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.1500 to 2500', 'x', 'x', '_37_1_relaation.jpg', '_37_2_Business.jpg', 1, '2017-01-15 09:33:41'),
(38, 21, '• x', '• Summer, like each of the seasons, arrives with its own distinct personality. Depending on your constitution, summer may increase your internal sense of harmony, or it may aggravate one of your innate tendencies. In summer season sun draws up moisture of nature, that is why seet, cold, fatty, liquid, cold food and drinks has been advised. Diva swapna or day time sleep is good to carry out. Wine is indicated in small quantity with plenty of water or should be avoided. Excessive salty, sour, pungent, hot things, excess physical activity and sexual intercourse are to be reduced or avoided.   For example, a hot-natured individual who prefers a cool climate may love the winter, but will feel hotter than most—to the point of discomfort—as the heat of summer intensifies. On the other hand, someone with chronically cold hands and feet, who never seems to be able to stay warm in the winter months, will experience exactly the opposite: long, cold winters will be a challenge and s/he will relish the heat of summer. But the seasons need not be an intrinsic source of fluctuating dread and euphoria.\r\n• Here in Auraveda we have designed some special treatment programs with proper diet and lifestyles choices for you to create a healthy balance and harmony from within and to maximize your summer health.', '• x', '• x', '1.30 to 2.00 hrs', '• x', '2 to 4 weeks', 'Rs.2000 to 3000', 'x', 'x', '_38_1_seasonpackages.jpg', '_38_2_season1.jpg', 1, '2017-01-15 09:35:17'),
(39, 22, '• x', '• Ayurveda, the 5,000-year-old healing system from India, believes that nature deeply influences our body, mind and soul. According to Ayurveda, a human body consists of three energies, or doshas–vata, pitta and kapha. In order to maintain the doshas in a healthy state of balance, one must follow daily and seasonal regimens. Vata, the energy of wind, is dry, rough, cold, light, sharp and mobile in nature. During the cold winter months, these qualities can be reflected as dryness, cold, cough, constipation, allergies, body aches, joint pains, anxiety and sleeplessness in Human Body. To maintain a balanced state in the winter, Ayurveda recommends a vata-pacifying regimen including Abhyangam (full body massage), Potli (Hot compress), Sirodhara (Oil therapy for head) with luke warm Ayurvedic Oils suitable for your body type and skin. Winter comes, the body becomes more dry both internally and externally, and the pain in the joints just shoots up, making them almost immobile!\r\n• Our winter package is specially designed to pacify Vata, to give you relief, to make the body fit throughout the extreme weather time, when your joints start hurting this winter !!', '• x', '• x', '1.30 to 2.00 hrs', '• x', '2 to 4 weeks', 'Rs.2000 to 3500', 'x', 'x', '_39_1_seasonpackages.jpg', '_39_2_seasonal.jpg', 1, '2017-01-15 09:36:55'),
(40, 23, '•   Traditionally, Ayurveda advises that everyone should follow a seasonal routine (ritucharya) to preserve balance as the season change. This routine does not involve major alterations in your lifestyle, only a shift of emphasis. You should always maintain your ayurvedic daily routine-that remains of primary importance and continue to follow the diet that pacifies your major dosha(or the one specified by an Ayurvedic health practitioner)with certain variations to blend into the season. ', '•   VATA accumulates during the dry or dehydrating heat of the summer .It becomes aggravated during the rainy season which causes weakened digestion, acidic atmospheric conditions, and gas produced from the earth.\r\n•   VATA SEASON (SUMMER AND RAINY SEASON) <br />\r\nFavor warm food and drink, heavier food, and a more oily diet that you do during the rest of the year. Make sure your food is well cooked and easy to digest, accompanied by plenty of warm liquids(hot water or tea is best) Eat more of the sweet, sour and salty tastes and less of bitter, astringent and pungent. Avoid dry or uncooked foods(especially salads and raw fruits and vegetables)\r\n•   PITTA accumulates during the rainy season due to the acidic conditions of the atmosphere and a weakened digestion. It is aggravated during autumn when the heat returns .This occurs after the cooling spell of the rainy season.\r\n•   PITTA SEASON (MIDSUMMER THROUGH EARLY AUTUMN) <br />\r\nAgni is naturally low during hot weather, so you may find that your appetite decreases in summer. Respect this change by not over eating. Favor cool food and drink, but not ice cold. Your body will want more liquids in hot weather, but it is important not to douse the digestive fire by drinking cold liquids after a meal. Favor sweet, bitter and astringent tastes and reduces sour, salty and pungent ones.\r\n•   KAPHA accumulates during the cold season due to the cold and damp caused by the winds, clouds, and rain. It gets aggravated during the spring when the warm weather liquefies the accumulating Kapha.\r\n•   KAPHA SEASON (SPRING AND EARLY SUMMER) <br />\r\nFavor a diet that is lighter, drier and less oily than during other seasons. Heavy dairy products (cheese, yogurt and ice cream) should be reduced, since they especially tend to aggravate pungent, bitter and astringent tastes and fewer with sweet, sour and salty tastes', '• x', '• x', '1.00 - 1.30 hrs', '• x', '2 to 4 weeks', 'Rs.2500 to 3500', 'x', 'x', '_40_1_seasonpackages.jpg', '_40_2_detox.jpg', 1, '2017-01-15 11:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Administrator'),
('usr', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`SDEID`),
  ADD KEY `SID` (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `SDEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`CATEGID`) REFERENCES `service_category` (`CATEGID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD CONSTRAINT `service_detail_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `services` (`SID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
