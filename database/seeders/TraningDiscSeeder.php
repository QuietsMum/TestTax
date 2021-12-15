<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TraningDisc;
class TraningDiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TraningDisc::create([
                             'disc' => 'Государственный служащий Ахметов К.Б., ИИН 840917300176, в 2021 году:
                                       <br>•	получил доход (заработную плату)  2 500 000 тенге;
                                       <br>•	имеет депозитный счет в банке РК на сумму 5 000 000 тенге с вознаграждением 9 % годовых;
                                       <br>•	начиная с августа 2021 года сдает в аренду квартиру за 100 000 тенге в месяц (за 5 месяцев 2021 года доход от аренды квартиры 500 000 тенге),
                                       <br>•	в июле 2021 года купил квартиру (кадастровый №02:036:132:00:01:61) за 18 000 000 тенге на наличные собственные сбережения (сумма наличных денег отражена во входной декларации об активах и обязательствах (форма 250.00)).',
                                       'disc_plus' => '
                                        •	(дебиторская/кредиторская задолженность перед банками и финансовыми организациями, осуществляющие отдельные виды банковских операций, созданные в соответствии с законодательством РК о банках и банковской деятельности в РК, в декларациях формы 250.00 и 270.00 не отражаются. Таким образом в данном случае находящийся у Ахметова К.Б., депозитный счет в сумме 5 000 000 тенге в банке РК не подлежит отражению в  форме 270.00)
                                        '
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруга государственного служащего Байтурова А.А., ИИН 7312014000135, является индивидуальным предпринимателем (далее-ИП), в 2021 году:
                                        <br>•	получила доход от ИП - 5 000 000 тенге;
                                        <br>•	в январе 2021 года приобрела квартиру (кадастровый № 02:036:132:00:01:61) за 15 000 000 тенге, источником на приобретение данного имущества использовала наличные деньги из собственного сбережения в сумме 10 000 000 тенге  (наличная сумма отражена во входной декларации об активах и обязательствах (форма 250.00)) и часть денежных средств  в сумме 5 000 000 тенге заняла (заем нотариально заверен у нотариуса ИИН 872000000000) у родственника Сыздыкова Н.М., ИИН 900103000000,
                                        <br>•	в августе 2021 года квартиру с кадастровым № 02:036:132:00:01:61,  продала за 18 000 000 тенге по договору купли-продажи физическому лицу Ахметову Б.Н., ИИН 840917300176;
                                        <br>•	в декабре 2021 года купила другую квартиру (кадастровый №02:036:132:00:01:00)  за 25 000 000 тенге, источником на приобретение данного имущества использовала денежные средства в сумме 18 000 000 тенге от продажи квартиры с кадастровым № 02:036:132:00:01:61 и 7 000 000 тенге заняла (заем нотариально заверен у нотариуса ИИН 872000000000) у коллеги Алиева Р.С., ИИН 940140000385.
',
                             'disc_plus' => '
                                        •	в целях декларирования полученные займы у родственников/знакомых, т.е. дебиторская/кредиторская задолженность физических лиц друг перед другом отражается при наличии договора или иного документа, являющийся основанием возникновения обязательства или требования, нотариально засвидетельствованного (удостоверенного)на 31 декабря отчетного налогового периода;
                                        <br>•	в данном случае у ФЛ от приобретенного и реализованного в течении года возникла положительная разница, в данном случае ФЛ в течении года приобрела квартиру (кадастровый № 02:036:132:00:01:61) за 15 000 000 тенге и реализовала  за 18 000 000 тенге, таким образом возникла положительная разница между ценой реализации и ценой приобретения имущества в сумме 3 000 000 тенге, с которой необходимо оплатить ИПН 10% (3 000 000*10%=300 000 подлежит оплате)
                                        '
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруга государственного служащего Байтурова А.А., ИИН 891126450799, в 2021 году:
                                        <br>•	работала по найму в организации «MB» и получила за 2021 год доход в сумме 3 500 000 тенге,
                                        <br>•	дополнительно работает фрилансером в российской компании «DG» (идентификационный номер 7707387034), где за 2021 год получила от компании доход - 30 000 долларов США;
                                        <br>•	в 2021 году приобрела 5% акции российской компания «DG» (идентификационный номер 7707387034), на сумму 5 000 долларов США, источником на приобретение акции  использовала собственные накопленные средства (сумма наличных денег отражена во входной декларации об активах и обязательствах (форма 250.00)).
                                        <br>•	имеет счет в Сбербанке РФ (идентификационный номер ISO936200000), с остатком по состоянию на 31 декабря 2021 года - 1 500 000 рублей
                                        <br>•	на юбилей родственник Байтуров К.Л., ИИН 840917300176, подарил по договору дарения машину (кузов №F122TY1245733);
',
                                        'disc_plus' => '
                                         •	полученные доходы за пределами РК, в данном случае 30 000 долларов США, для отражения в декларации необходимо перевести в тенге по курсу Национального Банка РК на 31 декабря отчетного налогового периода, на примере будем считать, что курс на 31.12.2021 года 1 доллара= 434,00 тенге, таким образом 30 000 долларов * 434.00 тенге = 13 020 000 тенге, Также, при получении дохода из источников за пределами РК, сумма уплаченного налога подлежит зачету при исчислении ИНП в РК, 13 020 000 *10% = 1 302 000 тенге;
                                         <br>•	в данном случае ФЛ купила акции в иностранной валюте, то есть за 5 000 долларов США, в  декларации стоимость приобретения отражается в тенге, таким образом будем считать, что курс на 31.12.2021 года 1 доллара= 434,00 тенге, таким образом 5 000 долларов США * 434.00 тенге = 2 170 000 тенге;
                                         <br>•	сведения о деньгах на банковских счетах в иностранных банках, находящихся за пределами РК отражаются в случае, если сумма денег на счете в совокупности превышает 1000-кратный размер МРП, установленного законом о республиканском бюджете и действующего на 31 декабря отчетного налогового периода. Будем считать, что МРП на 31.12.2021 года 2 917 тенге, таким образом если сумма денег в иностранном банке превышает 2 917 000 тенге (1000 МРП), значить подлежит отражению, в данном случае у ФЛ на счете в Сбербанке РФ остаток на 31 .12.2021 года 1 500 000 рублей, для установления порога отражения суммы необходимо перевести курс рубля в тенге,  будем считать на примере, что1 рубль по курсу Национального Банка РК = 5 тенге, значить 1 500 000 р. * 5 тг. = 7 500 000 тенге, что в данном случае превышает 1000-кратный МРП и подлежит отражению.
                                         '
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруга государственного служащего Байтурова А.А., ИИН 891126450799, работает частным нотариусом, в 2021 году:
                                        <br>•	получил доход от деятельности частного нотариуса - 2 400 000 тенге;
                                        <br>•	приобрела 2 земельных участка (далее-ЗУ), первый ЗУ (кадастровый №03:000:0120:00:1) на сумму 4 000 000 тенге, а второй ЗУ (кадастровый №03:000:0120:00:2) на сумму 9 000 000 тенге, для приобретения ЗУ использовала собственные накопления 10 000 000 тенге (сумма наличнаых денег отражена в декларации форма 250.00) и 3 000 000 тенге сняла деньги депозита  Халык банке РК, БИН 080 940 010 300;
                                        <br>•	в августе 2021 года заняла знакомому Ахметов К.Б., ИИН 840917300176, денежную сумму 1 000 ЕВРО (заем нотариально заверен, ИИН 8911264507779 нотариуса).
',
                                        'disc_plus' => '
                                         •	в целях декларирования полученные займы у родственников/знакомых, т.е. дебиторская/кредиторская задолженность физических лиц друг перед другом отражается при наличии договора или иного документа, являющийся основанием возникновения обязательства или требования, нотариально засвидетельствованного (удостоверенного)на 31 декабря отчетного налогового периода;
                                         <br>•	лица, занимающие частной практикой представляют декларацию по форме 240.00 до 2025 года, обнако если указанные лица являются супругой(ом) лиц, занимающих государстсвенную должность, либо приравненного лица, уполномоченного на выполнение государственных функций, супруги указанных лиц также отражают свой доходы для информации в форме 270.00.
                                         '
                          ]);
        TraningDisc::create([
                             'disc' => 'Государственный служащий Ахметов К.Б., ИИН 890000000001, за календарный 2021 год:
                                        <br>•	согласно справке о заработной плате получил доход 3 100 000 тенге;
                                        <br>•	дополнительно преподает в университете, где получил доход 500 000 тенге;
                                        <br>•	в сентябре 2021 года подарил сыну Кумисбай С. (090101000003) по договору дарения свою квартиру (кадастровый №02:00:001:00:215:1)
',
                                        'disc_plus' => ''
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруга лица, уполномоченного на выполнение государственных функции Ахметова А.А., ИИН 880 000 000 001, временно не работает:
                                        <br>•	в марте 2021 года купила квартиру (кадастровый номер 02:036:000:000:1/3) за 10 000 000 тенге и в октябре 2021 года автомобиль (№WDB514B12534091) за 6 000 000 тенге,  для приобритения имущества использовала
                                        <br>-	собственные накопленные денежные средства 5 000 000 тенге (сумма наличных денег отражена во входной декларации об активах и обязательствах (форма 250.00)).
                                        <br>-	оформила ипотеку в ЖССБ (БИН 030 740 001 404) – 5 000 000 тенге,
                                        <br>-	сняла с депозит в Халык банке (БИН 940 140 000 385)- 2 000 000 тенге,
                                        <br>-	взяла заем (долг) у родственника Байтурова А.А., ИИН 740 000 000 001 – 4 000 000 тенге (заем нотариально заверен, ИИН 8911264507779 нотариуса).
',
                                        'disc_plus' => '
                                         •	 в целях декларирования полученные займы у родственников/знакомых, т.е. дебиторская/кредиторская задолженность физического лица отражается при наличии договора или иного документа, являющегося основанием возникновения обязательства или требования, нотариально засвидетельствованного (удостоверенного) '
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруг гос.служащего Ахметов А.А., ИИН 890 000 000 001, не работает, но является плательщиком  единого совокупного платежа (ЕСП) и сдаёт в аренду квартиру:
                                        <br>•	от аренды квартиры в 2021 году получил доход - 1 200 000 тенге,
                                        <br>•	в 2021 году уступил права требования доли в жилом здании по ранее заключенному договору о долевом участии в жилищном строительстве и получил доход 800 000 тенге (сумма положительной разницы).
',
                                        'disc_plus' => '
                                         •	доходом от уступки права требования является положительная разница междустоимостью уступки права требования и ценой договора о долевом участиив жилищном строительстве. '
                          ]);
        TraningDisc::create([
                             'disc' => 'Государственный служащий Ахметов К.Б,  ИИН 890 000 000 001, за 2021 год:
                                        <br>•	получил доход в виде заработной платы - 3 012 000 тенге,
                                        <br>•	на праве собственности с 1990 года имеет земельный участок (кадастровый №03:0:020:215:1/А),
                                        <br>•	автомобиль марки «Kia Rio» (VIN: S11234J45667888)  (указанное ТС числится за ним с 2018 года),
                                        <br>•	в марте 2021 года продал автомобиль марки «Kia Rio» (VIN: S11234J45667888) знакомому Бектурганову М. (ИИН 701 010 000 000) за 4 500 000 тенге,
                                        <br>•	в феврале 2021 года купил другой автомобиль марки «Toyota Camry» (VIN: WW1234J45667891) за 5 300 000 тенге, для приобретения данного авто использовал сумму 4 500 000 тенге от продажи  автомобиля марки «Kia Rio» » (VIN: S11234J45667888)   и 800 000 тенге с накопленного дохода в течение 2021 года,
                                        <br>•	в декабре 2021 года супруге Ахметовой Л.Д., купил за 4 100 000 тенге в кредит через «АТФ-банк» (БИН 040 000 000 001) авто марки «Honda Accent» ( VIN: Q1234567HG12344) (кредит и авто оформлен на государственного служащего Ахметова К.Б).
',
                                        'disc_plus' => '
                                         •	 в декларации о доходах и имуществе (форма 270.00) отражаются сведения о приобретенном (полученном) и отчужденном имуществе (недвижимое имущество, транспортные средства, ценные бумаги, инвестиционное золото, доля участия в жилищном строительстве, доля участия в уставном капитале ЮЛ)) в течение отчетного налогового периода , таким образом для лиц представляющих декларацию с 01.01.2022 года, отчетным календарным годом будет являться 2021 год. В данном примере у ФЛ земельный участок (кадастровый №03:0:020:215:1/А) на праве собственности с 1990 года, так как земельный участок не приобретен в 2021 году, указанный земельный участок не подлежит отражению в декларации.'
                          ]);
        TraningDisc::create([
                             'disc' => 'Государственный служащий Ахметова А.А., ИИН 890 000 000 001, находится в декретном отпуске по уходу за ребенком (ребенку 2,5 года),  в 2021 году получила алименты 700 000 тенге на ребенка. Имеет на праве собственности 1-комнатную квартиру (кадастровый №02:036:000:000:1/3) (дата регистрации права собственности на квартиру 2000 год).
',
                                        'disc_plus' => '
                                         •	 из дохода физического лица, подлежащих налогообложению, исключаются 54 вида дохода в соответствии со статьей 341Налогового кодекса.
                                         <br>•	 в декларации о доходах и имуществе (форма 270.00) отражаются сведения о приобретенном (полученном) и отчужденном имуществе (недвижимое имущество, транспортные средства, ценные бумаги, инвестиционное золото, доля участия в жилищном строительстве, доля участия в уставном капитале ЮЛ)) в течение отчетного налогового периода, таким образом для лиц представляющих декларацию с 01.01.2022 года, отчетным календарным годом будет являться 2021 год.
                                         <br>    В данном примере у ФЛ квартира (кадастровый №02:036:000:000:1/3) на праве собственности с 2000 года, так как недвижимое имущество не приобретено в 2021 году, указанный земельный участок не подлежит отражению в декларации.
'
                          ]);
        TraningDisc::create([
                             'disc' => 'Супруг  Ахметов А.А., ИИН 740 000 000 001:
                                        <br>•	зарегистрирована в качестве крестьянского хозяйства,
                                        <br>•	имеет с 1995 года земельный участок, целевое назначение земельного участка «крестьянское хозяйство»,
                                        <br>•	в 2021 году доход от деятельности крестьянского хозяйства составил 1 000 000 тенге  (доход отражен «1 000 000» в форме 920.00),
                                        <br>•	также с августа 2021 года работает медиатором, за 5 месяцев 2021 года от деятельности медиатора получила доход 750 000 тенге,
                                        <br>•	с 2018 года на праве собственности имеет квартиру (кадастровый номер 02:311:000:0:11:2), которую в октябре 2021 года подарил по договору дарения сыну Ахметову .Д., ИИН 090 916 000 000.
',
                                        'disc_plus' => ''
                          ]);

    }
}
