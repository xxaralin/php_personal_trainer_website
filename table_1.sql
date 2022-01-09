-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2022, 15:57:57
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `csv_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `table 1`
--

CREATE TABLE `table 1` (
  `id` int(11) NOT NULL,
  `exercise` varchar(121) DEFAULT NULL,
  `equipment` varchar(46) DEFAULT NULL,
  `exercise_type` varchar(16) DEFAULT NULL,
  `muscle` varchar(13) DEFAULT NULL,
  `level` varchar(16) NOT NULL,
  `gif` varchar(325) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `table 1`
--

INSERT INTO `table 1` (`id`, `exercise`, `equipment`, `exercise_type`, `muscle`, `level`, `gif`) VALUES
(2, 'ArnoldPress', 'Dumbbells', 'Weight', 'Arms', 'Beginner', 'https://dl.airtable.com/FvaObZ1SyqwBU12Wx4K7_giphy-2.gif'),
(3, 'BicepCurl', 'Bar,Dumbbells,Cable', 'Weight,Machine', 'Arms', 'Beginner', 'https://dl.airtable.com/Pld28NJDTyeYLcaJV7hQ_3e8b7121-738e-4457-b6d8-fd3a3e04de5a.gif'),
(4, 'BicycleCrunch', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/Y0JUbM2YTfe8uRz0jb5w_200.gif'),
(5, 'Bounds', 'BodyWeight', 'Cardio,Laps', 'FullBody,Legs', 'Beginner', 'https://dl.airtable.com/EkEnZqmyR9aAqElh54PL_1ea07303-2e87-4876-8e68-8944edd42173.gif'),
(6, 'BoxJumps', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/ZA0AU7h5RGyzcOQ1km9Z_giphy.gif'),
(7, 'BoxToeTouch', 'Platform', 'Cardio', 'Legs', 'Intermediate', 'https://dl.airtable.com/ypibIv5pTmgfMNAJgY6J_workoutanniversarygif9570.gif'),
(8, 'BroadJump', 'BodyWeight', 'Plyo,Laps,Cardio', 'Legs', 'Intermediate', 'https://dl.airtable.com/bYHQDYRDSeyzMCrhFxoT_Broad-Jumps-180-Degree-Twist.gif'),
(9, 'BulgarianSplitSquat', 'Bar,Dumbbells', 'Weight', 'Legs', 'Advanced', 'https://dl.airtable.com/599OAXT5SmTKCEZDTkWA_erin_stern_demonstrates_bulgarian_split_squat.gif'),
(10, 'Burpee', 'BodyWeight,BosuBall', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/xDZ3bhDQqG3erLNNwgyF_Burpee.gif'),
(11, 'BurpeeBroadJump', 'BodyWeight', 'Plyo,Laps', 'FullBody', 'Intermediate', 'https://dl.airtable.com/e4ymuWNQqezi70M2EVpG_BurpeeBroadJump-1.gif'),
(12, 'ButtKickers', 'BodyWeight', 'Cardio', 'Legs', 'Beginner', 'https://dl.airtable.com/pUgsc0ifRCKNfXOcvkSX_1ef0b377-0b2e-47a0-9f1f-1e8ab3669923.gif'),
(13, 'CalfRaise', 'Dumbbells,Machine', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/SQxbpgUWQSGxagLa6JaD_Calf-Raises-Basic.jpg'),
(14, 'ChestPress', 'Dumbbells', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/kyVvuwERkueuJQpV5fcT_Dumbbell-Floor-Press.gif'),
(15, 'ClosetoWideGripBurnout', 'Dumbbells', 'Weight', 'Arms', 'Beginner', 'https://dl.airtable.com/EKGDlplSbeSlC8mY2jqH_4.gif'),
(16, 'CompassJump', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/DVWMKACWQ2S1D1AIo75L_3b38ff89-fc79-409e-b45e-ae6a47d1ca17.gif'),
(17, 'CrabCrawl', 'BodyWeight', 'Cardio,Laps', 'FullBody', 'Intermediate', 'https://dl.airtable.com/ATjCdKZ9QialuVzd072J_0d08fe37-5714-486b-a786-fea0f0cfbea7.gif'),
(18, 'CurtseyLunges', 'Dumbbells,Bar', 'Weight', 'Legs', 'Advanced', 'https://dl.airtable.com/qInmxz6RmTISdbvfQxUQ_curtsy_lunge_barbell.gif'),
(19, 'DeficitSquat', 'Platform', 'Weight', 'Legs', 'Advanced', 'https://dl.airtable.com/Je3QynAQXy8fNetseCA8_dumbell-squat-from-deficit-front-view.png'),
(20, 'DonkeyKick', 'Dumbbells,Band,BodyWeight', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/Od3Fpm51SjuPFoNp6QNh_kickbacks_donkey_kicks_on_the_smith_machine_ifbb_bikini_pro_training_glutes.gif'),
(21, 'FireHydrant', 'Band,BodyWeight', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/MEMCDbjRam2VygRIDV5S_Jen-Selters-Fire-Hydrant.gif'),
(22, 'FlutterKick', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/rsRW7e2JQMSscISPxOwm_Flutter-Kicks.gif'),
(23, 'Frogger', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/LqlhafK8SdbDLhssMfVG_831b594cc2767b2f_Frogger.gif'),
(24, 'GluteBridge', 'Band,Dumbbells', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/KNCrgmAZTKyppbcj7oTC_a562d6f5-888c-4b4a-a274-f969c3a8557d.gif'),
(25, 'GluteBridgeMarch', 'Band,Platform', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/CEVQMLbKSouX9GjRVXpR_7346ca6c-b218-4a33-8fc7-f522df243390.gif'),
(26, 'GobletSquat', 'Kettlebells,Dumbbells', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/GhZXa41TlGnE4DjPPmWA_depositphotos_127641230-stock-photo-kettlebell-goblet-squat.jpg'),
(27, 'Halo', 'Kettlebells,Dumbbells', 'Weight', 'Arms', 'Advanced', 'https://dl.airtable.com/XfsU9SRQoqRDq99IUeA2_ebe25b12-cc24-4b29-8d98-9566007ac4a8.gif'),
(28, 'HeartPump', 'Kettlebells,Dumbbells', 'Weight', 'Arms', 'Advanced', 'https://dl.airtable.com/rTMlSufGTWmbykC4De4Y_eac68ec3-15dc-4a6a-806f-aa7572f394b0.gif'),
(29, 'HighKnees', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/J9KgeDiSS6CcpoXXCu6v_highkneerun-1457044203.gif'),
(30, 'JumpLunges', 'BodyWeight', 'Plyo,Cardio', 'Legs', 'Intermediate', 'https://dl.airtable.com/Ba9XRSpLRIK2a7mnAcxp_6405bfbb-585f-45e8-8834-0c5145f546f6.gif'),
(31, 'JumpRope', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/vMYowb6TRJ6PeXp23MvX_Sprint-2.gif'),
(32, 'JumpingJackPushPress', 'MedicineBall', 'Cardio', 'FullBody', 'Advanced', 'https://dl.airtable.com/oZVQcwVARtqxWSC7tyFu_workoutanniversarygif05570.gif'),
(33, 'JumpingJacks', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/4EdvWh9Tre1EKZ9BH9LA_jumping-jacks-gif-11.gif'),
(34, 'KettlebellSwing', 'Kettlebells,Dumbbells', 'Cardio,Weight', 'FullBody', 'Intermediate', 'https://dl.airtable.com/sc9eLj4NTPSdXpxAlVxv_778789f4361994739ce59b8e597d00e7.gif'),
(36, 'LateralBandWalk', 'Band', 'Cardio,Laps', 'Legs', 'Beginner', 'https://dl.airtable.com/CF41gTm6RqG9eXo4ZZn1__CrabWalkSelf2_1_2.gif'),
(37, 'LegPullApart', 'Band', 'Weight', 'Legs,Back', 'Intermediate', 'https://dl.airtable.com/5BX9RPuRQsanTolgDYcg_f240c036-c8d8-4d59-8a2b-941a438ea462.gif'),
(38, 'LegRaise', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/dXQ5blUQzqkbvODop0DP_legraise.jpg'),
(39, 'LiterallyJustJumping', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/vlcOBT7rRZKO6CPNG3bP_tenor.gif'),
(40, 'LyingLegRaises', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/poLyFerTtuakObeRkXam_lying.gif'),
(41, 'MilitaryPlank', 'BodyWeight', 'Cardio', 'FullBody,Arms', 'Intermediate', 'https://dl.airtable.com/jKY8uPBNQCmUoiT9oehg_Military-Plank-Vicky.gif'),
(42, 'MonkeyJump', 'BodyWeight', 'Plyo,Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/niCgrY1wSI2BNzhk9Yuc_d6367f97-0584-4895-b292-d7aeae1b3ad6.gif'),
(43, 'MountainClimbers', 'BodyWeight,BosuBall', 'Cardio', 'Core,FullBody', 'Beginner', 'https://dl.airtable.com/irHgy8wcTOaOoGUxhSxa_mountain-climbers-gif-3.gif'),
(44, 'Plank', 'BodyWeight', 'Weight', 'FullBody,Core', 'Intermediate', 'https://dl.airtable.com/oAufzPV5TLaAWqvawz9T_plank.jpg'),
(45, 'PlankJack', 'Band,BodyWeight', 'Cardio', 'FullBody,Core', 'Intermediate', 'https://dl.airtable.com/gQzMkwbOSdab50QPoMEB_3705bd36-6b31-42df-9dd1-8d4984b797dc.gif'),
(46, 'PlankRow', 'Dumbbells', 'Weight', 'Back', 'Intermediate', 'https://dl.airtable.com/grctQ485ReSm2OEthRIc_3d9683d8b8f09bb0863726633ae69910.gif'),
(47, 'Pushup', 'BodyWeight', 'Weight', 'Arms', 'Beginner', 'https://dl.airtable.com/yyFWkXdGT2i7TMjYZGpL_GlossySkinnyDuckbillcat-max-1mb.gif'),
(48, 'PushupWalk', 'Band', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/qK68xf5EQhiJvcxDH3Pd_094028d3-bc38-481b-85c1-5c8dad17f12b.gif'),
(49, 'ReverseCrunches', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/VaOguQgQI6w8qryauNZQ_reverse.gif'),
(50, 'Row', 'Bar,Dumbbells,Landmine', 'Weight', 'Back', 'Advanced', 'https://dl.airtable.com/kVcbXQy9QdGOrjdFdzoO_78eb6279-95b9-4269-a337-c2c0ca3b78d3.gif'),
(51, 'RussianTwist', 'Kettlebells,Dumbbells', 'Weight', 'Core', 'Intermediate', 'https://dl.airtable.com/dYG39TGTPavUaPz63Jsy_26c0501d-0254-4bc7-9b79-47b004393d4d.gif'),
(52, 'SealJacks', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/IFXO2u2ZR8OzAHgp52v1_Seal-Jacks.gif'),
(53, 'ShoulderPress', 'Bar,Dumbbells', 'Weight', 'Arms', 'Advanced', 'https://dl.airtable.com/lk4lhOS9RdqnKm5Pj7aw_03478637-60f5-49f1-95b3-593fead73610.gif'),
(54, 'SideArm/LateralRaise', 'Dumbbells', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/NUbYbi5uRb6GeH0ZlcXi_12abf096-2edb-4062-8468-17e2951c14fe.gif'),
(55, 'SideLunge', 'BodyWeight,Dumbbells', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/OL3jchvCRQSLsnYmhI55_lungeside.gif'),
(56, 'SidePlank', 'BodyWeight', 'Weight', 'FullBody,Core', 'Beginner', 'https://dl.airtable.com/keRG2g3RECoT3LxhDGtQ__main2_sideplank.jpg'),
(57, 'SidePlankDips', 'BodyWeight', 'Weight', 'Core', 'Intermediate', 'https://dl.airtable.com/wkTRLvHTt2o4UX8RLo61_Side-Plank-Hip-Dips.gif'),
(58, 'SidePlankwithLegLift', 'Band,BodyWeight', 'Weight', 'Core', 'Advanced', 'https://dl.airtable.com/llvinxQRxCzG0K0YihOQ_75dcba8e-f0af-48c0-a6e8-c477b738911e.gif'),
(59, 'SingleArmCleanandPress,\"Kettlebells', 'Dumbbells\"', 'Weight', 'FullBody,Arms', 'Intermediate', 'https://dl.airtable.com/M3Q7JQh4SEC22nZq5ru0_KettleBellCleanPress.gif'),
(60, 'SingleLegHipBridge', 'BodyWeight,Dumbbells,BosuBall', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/nNGVnc7SFewVtiVcQb3U_Hip-Thrust.gif'),
(61, 'SingleLegSquat', 'BodyWeight', 'Weight', 'Legs', 'Advanced', 'https://dl.airtable.com/PtJIrGJjSkqqfObx7q8c_c7c4a48e-8a32-4f5e-aacf-bf152712e71a.gif'),
(62, 'SitupandThrow', 'MedicineBall', 'Weight', 'Core', 'Intermediate', 'https://dl.airtable.com/NDsSU55jRXSUAdKHEZA3_30-best-ab-exercises-situp-and-throw.jpg'),
(63, 'Skaters', 'BodyWeight', 'Cardio', 'Legs', 'Beginner', 'https://dl.airtable.com/Q5dmhk82TzqmlWq6xqJg_cca03f06-da6a-4d09-9718-b6e595fb2b96.gif'),
(64, 'Skipping', 'BodyWeight', 'Cardio,Laps', 'FullBody', 'Beginner', 'https://dl.airtable.com/k5H1cu0cQF6rfO8LsRaa_4ee3d030-05d7-4961-86a6-bcdc727ec8e9.gif'),
(65, 'SkullCrusher', 'Dumbbells,Bar', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/h9v6LLAERqunzBJAdjeD_14.gif'),
(66, 'SpidermanPushup', 'BodyWeight', 'Weight', 'Arms,Core', 'Intermediate', 'https://dl.airtable.com/OK93O1xWRA2yu3GG8zoF_0dd5e852-dd90-4f1e-a570-c20dca7c72cf.gif'),
(67, 'Squat', 'Bar,Dumbbells,BodyWeight,SquatRack,Band', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/r3DIlCSPTsimSjgCPuHS_barbell-squat.gif'),
(68, 'SquatJump', 'BodyWeight', 'Plyo,Cardio', 'Legs', 'Beginner', 'https://dl.airtable.com/gpp3YS4jTyijTClCALdq_5a1e902f-42e7-4b38-b3c5-af3cb2cbbf0c.gif'),
(69, 'SquatJumps180', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/U5DO3G2T1apEtdTbx9PH_0145ce919124c8a3_SquatJump180Small.gif'),
(70, 'SquattoLateralLegLift', 'Band', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/ZuOXOtbTRcuVbC9uQPuY__SquatLateralLegLiftSelf2_1_3.gif'),
(71, 'StandingGluteKickbaks', 'Band', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/uF03I0P8SQW3vLXFUfRN__StandingGluteKickBackSelf2_1_4.gif'),
(72, 'StandingLegLift', 'Cable,Band', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/a1WhvoWCTpB8KuxQc1Up_Athletic-woman-doing-side-kick-resistance-band-exercise-1024x954.jpg'),
(73, 'StandingObliqueCrunch', 'Dumbbells', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/38n4dcbTgCM2tjvxWKUb_Standing-Oblique-Crunches.gif'),
(74, 'StarJump', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/ISLRenRs2FWV3QFratPw_workoutanniversarygif06570.gif'),
(75, 'StepUpLunges', 'Platform,Dumbbells', 'Cardio', 'Legs', 'Beginner', 'https://dl.airtable.com/QBmW9FpxQn2FN7CQLFH7_dumbbell-step-up.gif'),
(76, 'Step-BackLunge', 'Bar,BodyWeight,Dumbbells,SquatRack', 'Weight', 'Legs', 'Intermediate', 'https://dl.airtable.com/A2uJ0HlJQWWebQFz0eul_bikini_prep_full_glute_training_routine_quest_cake_recipe_training_vlog.gif'),
(77, 'StraightupSitup', 'Dumbbells', 'Weight', 'Core', 'Advanced', 'https://dl.airtable.com/GPXUq5zcRoGqP9WbvJLa_30-best-ab-exercises-straight-leg-barbell-situp.jpg'),
(78, 'SumoSquat', 'Bar,Dumbbells,BodyWeight', 'Weight', 'Legs', 'Beginner', 'https://dl.airtable.com/OLsqAqSuS16qsySMCgAw_a7a48b0ff2d2b6b10e086290b1fede92.gif'),
(79, 'Superman', 'BodyWeight', 'Weight', 'Back', 'Beginner', 'https://dl.airtable.com/I7Gp5cmZTKejJcfh2oNA_13a573f1_Superman.jpg'),
(80, 'Touchdown', 'BodyWeight', 'Cardio', 'FullBody', 'Beginner', 'https://dl.airtable.com/MTMz4OoeRFaccThM3XKx_WtFJBce.gif'),
(81, 'TricepDip', 'BodyWeight', 'Weight', 'Arms', 'Advanced', 'https://dl.airtable.com/gZTLGaYoTI6P0WwdO2u4_Tricep-Dip-on-Bench-g.gif'),
(82, 'TricepKick-Back', 'Dumbbells', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/tjY0kN2QTBSIoZZCv10k_Triceps-Kickback.jpg'),
(83, 'TricepOverheadPress', 'Dumbbells', 'Weight', 'Arms', 'Intermediate', 'https://dl.airtable.com/Pp7ftUMQe6qzCxJg7iXs_5.gif'),
(84, 'TuckJump', 'BodyWeight', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/Zo0O59geRTataUwhQo2r_Tuck-Jumps.gif'),
(85, 'TwistedMountainClimbers', 'BodyWeight,BosuBall', 'Cardio', 'FullBody,Core', 'Beginner', 'https://dl.airtable.com/QqbBRbLRFaMBuFe9VR8g_mountain-climbers-gif-3.gif'),
(86, 'WallBall', 'MedicineBall', 'Cardio', 'FullBody', 'Advanced', 'https://dl.airtable.com/tOqEs71CReQ9XSK15MwN_WallBallToss.gif'),
(87, 'WeightedJumpingJacks', 'Dumbbells', 'Cardio', 'FullBody', 'Intermediate', 'https://dl.airtable.com/Ay4JNlvRqCCbLlKjwHWC_eec0a59a6eacdc9cfd19a13290516684.jpg'),
(88, 'WeightedPunches', 'Dumbbells', 'Cardio', 'Core', 'Beginner', 'https://dl.airtable.com/AZ5zCPLNRJBCx5CwWUwn_cross-punch-exercise-illustration.gif'),
(89, 'Deadbug', 'BodyWeight', 'Weight', 'Core', 'Beginner', 'https://dl.airtable.com/Vwxt6KjRW62PrDrpTDSx_exAX6p.gif');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `table 1`
--
ALTER TABLE `table 1`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `table 1`
--
ALTER TABLE `table 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
