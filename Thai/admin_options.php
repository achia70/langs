<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'HTTP_REFERER ไม่ถูกต้อง ถ้าคุณย้ายฟอรั่มเหล่านี้จาก o_base_urlตําแหน่งที่ตั้งหนึ่งไปยังอีกตําแหน่งหนึ่ง .phpหรือโดเมนที่ถูกสลับ',
'Must enter title message'			=>	'คุณต้องใส่ชื่อเรื่องบอร์ด',
'Invalid e-mail message'			=>	'ที่อยู่อีเมลของผู้ดูแลระบบที่คุณป้อนไม่ถูกต้อง',
'Invalid webmaster e-mail message'	=>	'ที่อยู่อีเมลสําหรับผู้ดูแลเว็บที่คุณใส่ไม่ถูกต้อง',
'SMTP passwords did not match'		=>	'คุณต้องป้อนรหัสผ่าน SMTP สองครั้งเหมือนกันทุกเวลาเพื่อเปลี่ยนรหัสผ่าน',
'Enter announcement here'			=>	'ป้อนประกาศของคุณที่นี่',
'Enter rules here'					=>	'ป้อนกฎของคุณที่นี่',
'Default maintenance message'		=>	'ฟอรัมหยุดทํางานชั่วคราวเพื่อการบํารุงรักษา โปรดลองอีกครั้งในอีกสักครู่',
'Timeout error message'				=>	'ค่าของ "การหมดเวลาออนไลน์" ต้องน้อยกว่าค่าของ "การเยี่ยมชมหมดเวลา"',
'Options updated redirect'			=>	'ตัวเลือกถูกปรับปรุง กําลังเปลี่ยนเส้นทาง ...',
'Options head'						=>	'ตัวเลือก',

// Essentials section
'Essentials subhead'				=>	'สิ่งที่จำเป็น',
'Board title label'					=>	'ชื่อบอร์ด',
'Board title help'					=>	'ชื่อของกระดานข่าวนี้ (แสดงที่ด้านบนของทุกหน้า) เขตข้อมูลนี้ <strong>ไม่มี</strong> HTML อยู่',
'Board desc label'					=>	'คําอธิบายบอร์ด',
'Board desc help'					=>	'คําอธิบายโดยย่อของกระดานข่าวนี้ (แสดงที่ด้านบนของทุกหน้า) เขตข้อมูลนี้อาจมี HTML',
'Base URL label'					=>	'URL พื้นฐาน',
'Base URL help'						=>	'URL ที่สมบูรณ์ของคณะกรรมการโดยไม่ต้องต่อท้ายเครื่องหมายทับ (เช่น http://www.โดเมนของฉัน.com/ฟอรั่ม) สิ่งนี้ <strong>ต้องถูกต้อง</strong> เพื่อให้ผู้ดูแลระบบและผู้ควบคุมทั้งหมดทํางานได้ หากคุณได้รับข้อผิดพลาด "ผู้อ้างอิงที่ไม่ดี" (หรือ Bad referer) สิ่งนี้อาจไม่ถูกต้อง',
'Base URL problem'          =>  'การติดตั้งของคุณไม่สนับสนุนการแปลงชื่อโดเมนสากลโดยอัตโนมัติ เนื่องจาก URL พื้นฐานของคุณมีอักขระพิเศษ <strong>ต้อง</strong> ใช้ตัวแปลงออนไลน์เพื่อหลีกเลี่ยงข้อผิดพลาด "ผู้อ้างอิงที่ไม่ดี" (หรือ Bad referer)',
'Timezone label'					=>	'โซนเวลาเริ่มต้น',
'Timezone help'						=>	'เขตเวลาเริ่มต้นสําหรับแขกและผู้ใช้ที่พยายามลงทะเบียนบอร์ด',
'DST label'							=>	'ปรับปรุงสําหรับการปรับเวลาตามฤดูกาล',
'DST help'							=>	'ตรวจสอบว่าการเลื่อนเวลาตามฤดูกาลมีผลหรือไม่ (เลื่อนเวลาล่วงหน้า 1 ชั่วโมง)',
'Language label'					=>	'ภาษาเริ่มต้น',
'Language help'						=>	'ภาษาเริ่มต้นสําหรับลูกค้าและผู้ใช้ที่ยังไม่ได้เปลี่ยนจากค่าเริ่มต้นในโปรไฟล์ของพวกเขา ถ้าคุณเอาชุดภาษาออก ควรปรับเปลี่ยนมัน',
'Default style label'				=>	'ลักษณะเริ่มต้น',
'Default style help'				=>	'ลักษณะเริ่มต้นสําหรับแขกและผู้ใช้ที่ยังไม่ได้เปลี่ยนจากค่าเริ่มต้นในโปรไฟล์ของพวกเขา',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) เส้นวันที่ระหว่างประเทศฝั่งตะวันตก',
'UTC-11:00'							=>	'(UTC-11:00) นีอูเอ, ซามัว',
'UTC-10:00'							=>	'(UTC-10:00) ฮาวาย-อลูเธียน, เกาะคุก',
'UTC-09:30'							=>	'(UTC-09:30) หมู่เกาะมาร์เกสซาส',
'UTC-09:00'							=>	'(UTC-09:00) อลาสก้า, เกาะแกมเบีย',
'UTC-08:30'							=>	'(UTC-08:30) หมู่เกาะพิตแคร์น',
'UTC-08:00'							=>	'(UTC-08:00) แปซิฟิก',
'UTC-07:00'							=>	'(UTC-07:00) ภูเขา',
'UTC-06:00'							=>	'(UTC-06:00) เซ็นทรัล',
'UTC-05:00'							=>	'(UTC-05:00) ตะวัน ออก',
'UTC-04:00'							=>	'(UTC-04:00) แอตแลนติก',
'UTC-03:30'							=>	'(UTC-03:30) นิวฟันด์แลนด์',
'UTC-03:00'							=>	'(UTC-03:00) อเมซอน, เซ็นทรัลกรีนแลนด์',
'UTC-02:00'							=>	'(UTC-02:00) กลางแอตแลนติก',
'UTC-01:00'							=>	'(UTC-01:00) อาซอร์ส, เคปเวิร์ด, กรีนแลนด์ตะวันออก',
'UTC'								=>	'(UTC) ยุโรปตะวันตก, กรีนิช',
'UTC+01:00'							=>	'(UTC+01:00) ยุโรปกลาง, แอฟริกาตะวันตก',
'UTC+02:00'							=>	'(UTC+02:00) ยุโรปตะวันออก, แอฟริกากลาง',
'UTC+03:00'							=>	'(UTC+03:00) แอฟริกาตะวันออก',
'UTC+03:30'							=>	'(UTC+03:30) อิหร่าน',
'UTC+04:00'							=>	'(UTC+04:00) มอสโก, กัลฟ์, ซามารา',
'UTC+04:30'							=>	'(UTC+04:30) อัฟกานิสถาน',
'UTC+05:00'							=>	'(UTC+05:00) ปากีสถาน',
'UTC+05:30'							=>	'(UTC+05:30) อินเดีย, ศรีลังกา',
'UTC+05:45'							=>	'(UTC+05:45) เนปาล',
'UTC+06:00'							=>	'(UTC+06:00) บังกลาเทศ, ภูฏาน, เยเคเทรินเบิร์ก',
'UTC+06:30'							=>	'(UTC+06:30) หมู่เกาะโคคอส, พม่า',
'UTC+07:00'							=>	'(UTC+07:00) ไทย, โนโวซิบีสค์',
'UTC+08:00'							=>	'(UTC+08:00) จีน, ออสเตรเลียตะวันตก, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) ตะวันออกเฉียงใต้ของรัฐเวสเทิร์นออสเตรเลีย',
'UTC+09:00'							=>	'(UTC+09:00) ญี่ปุ่น, เกาหลี, ชิตะ, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) ออสเตรเลียกลาง',
'UTC+10:00'							=>	'(UTC+10:00) ออสเตรเลียตะวันออก',
'UTC+10:30'							=>	'(UTC+10:30) ลอร์ดฮาว',
'UTC+11:00'							=>	'(UTC+11:00) เกาะโซโลมอน, วลาดิวอสต็อก',
'UTC+11:30'							=>	'(UTC+11:30) เกาะนอร์ฟอล์ก',
'UTC+12:00'							=>	'(UTC+12:00) นิวซีแลนด์, ฟิจิ, มากาดาน',
'UTC+12:45'							=>	'(UTC+12:45) หมู่เกาะชาแทม',
'UTC+13:00'							=>	'(UTC+13:00) ตองกา, หมู่เกาะฟีนิกซ์, กัมชาตกา',
'UTC+14:00'							=>	'(UTC+14:00) หมู่เกาะไลน์',

// Timeout Section
'Timeouts subhead'					=>	'การหมดเวลา',
'Time format label'					=>	'รูปแบบเวลา',
'PHP manual'						=>	'คู่มือ PHP',
'Time format help'					=>	'[รูปแบบปัจจุบัน: %s] ดู %s สําหรับตัวเลือกการจัดรูปแบบ',
'Date format label'					=>	'รูปแบบวันที่',
'Date format help'					=>	'[รูปแบบปัจจุบัน: %s] ดู %s สําหรับตัวเลือกการจัดรูปแบบ',
'Visit timeout label'				=>	'การหมดเวลาของการเยี่ยมชม',
'Visit timeout help'				=>	'จํานวนวินาทีที่ผู้ใช้ต้องไม่ได้ใช้งานก่อนที่ข้อมูลการเยี่ยมชมครั้งล่าสุดของเขา/เธอจะได้รับการปรับปรุง (ส่วนใหญ่จะมีผลต่อตัวบ่งชี้ข้อความใหม่)',
'Online timeout label'				=>	'การหมดเวลาออนไลน์',
'Online timeout help'				=>	'จํานวนวินาทีที่ผู้ใช้ต้องไม่ได้ใช้งานก่อนที่จะถูกเอาออกจากรายชื่อผู้ใช้ออนไลน์',
'Redirect time label'				=>	'เวลาเปลี่ยนเส้นทาง',
'Redirect time help'				=>	'จํานวนวินาทีที่จะรอเมื่อเปลี่ยนเส้นทาง ถ้าตั้งค่าเป็น 0 จะไม่มีการแสดงเพจการเปลี่ยนเส้นทาง (ไม่แนะนํา)',

// Display Section
'Display subhead'					=>	'แสดง',
'Version number label'				=>	'หมายเลขรุ่น',
'Version number help'				=>	'แสดงหมายเลขเวอร์ชัน FluxBB ในท้ายกระดาษ',
'Info in posts label'				=>	'ข้อมูลผู้ใช้ในโพสต์',
'Info in posts help'				=>	'แสดงข้อมูลเกี่ยวกับโปสเตอร์ภายใต้ชื่อผู้ใช้ในมุมมองหัวข้อ ข้อมูลที่ได้รับผลกระทบคือสถานที่วันที่ลงทะเบียนจํานวนโพสต์และลิงก์ติดต่อ (อีเมลและ URL)',
'Post count label'					=>	'จํานวนการโพสต์ของผู้ใช้',
'Post count help'					=>	'แสดงจํานวนโพสต์ที่ผู้ใช้ได้ทําไว้ (มีผลต่อมุมมองหัวข้อ โพรไฟล์ และรายชื่อผู้ใช้)',
'Smilies label'						=>	'Smiliesในโพสต์',
'Smilies help'						=>	'แปลง smilies เป็นไอคอนกราฟิกขนาดเล็ก',
'Smilies sigs label'				=>	'Smiliesในลายเซ็น',
'Smilies sigs help'					=>	'แปลง smilies เป็นไอคอนกราฟิกขนาดเล็กในลายเซ็นผู้ใช้',
'Clickable links label'				=>	'สร้างลิงก์ที่คลิกได้',
'Clickable links help'				=>	'เมื่อเปิดใช้งาน FluxBB จะตรวจจับ URL ใด ๆ ในโพสต์โดยอัตโนมัติและทําให้เป็นไฮเปอร์ลิงก์ที่สามารถคลิกได้',
'Topic review label'				=>	'รีวิวหัวข้อ',
'Topic review help'					=>	'จํานวนโพสต์สูงสุดที่จะแสดงเมื่อลงรายการบัญชี (ใหม่ที่สุดก่อน) ตั้งค่าเป็น 0 เพื่อปิดใช้งาน',
'Topics per page label'				=>	'หัวข้อต่อหน้า',
'Topics per page help'				=>	'จํานวนหัวข้อเริ่มต้นที่จะแสดงต่อหน้าในฟอรัม ผู้ใช้สามารถปรับการตั้งค่านี้ให้เป็นแบบส่วนตัวได้',
'Posts per page label'				=>	'โพสต์ต่อหน้า',
'Posts per page help'				=>	'จํานวนโพสต์เริ่มต้นที่จะแสดงต่อหน้าในหัวข้อ ผู้ใช้สามารถปรับการตั้งค่านี้ให้เป็นแบบส่วนตัวได้',
'Indent label'						=>	'ขนาดการเยื้อง',
'Indent help'						=>	'ถ้าตั้งค่าเป็น 8 แท็บปกติจะถูกใช้เมื่อแสดงข้อความภายในแท็ก [code][/code] มิฉะนั้นจะใช้ช่องว่างจํานวนมากนี้ในการเยื้องข้อความ',
'Quote depth label'					=>	'ความลึกสูงสุด [quote]',
'Quote depth help'					=>	'เวลาสูงสุดที่แท็ก [quote] สามารถเข้าไปภายในแท็ก [quote] แท็กใดๆ ที่ลึกกว่าแท็กนี้จะถูกละทิ้ง',

// Features section
'Features subhead'					=>	'คุณสมบัติ',
'Quick post label'					=>	'ตอบกลับอย่างรวดเร็ว',
'Quick post help'					=>	'เมื่อเปิดใช้งาน FluxBB จะเพิ่มแบบฟอร์มตอบกลับอย่างรวดเร็วที่ด้านล่างของหัวข้อ วิธีนี้ผู้ใช้สามารถโพสต์ได้โดยตรงจากมุมมองหัวข้อ',
'Users online label'				=>	'ผู้ใช้ออนไลน์',
'Users online help'					=>	'แสดงข้อมูลในหน้าดัชนีเกี่ยวกับแขกและผู้ใช้ที่ลงทะเบียนกําลังเรียกดูบอร์ดอยู่',
'Censor words label'				=>	'คําเซ็นเซอร์',
'Censor words help'					=>	'เปิดใช้งานเพื่อเซ็นเซอร์คําเฉพาะในบอร์ด ดู %s สําหรับข้อมูลเพิ่มเติม',
'Signatures label'					=>	'ลาย เซ็น',
'Signatures help'					=>	'อนุญาตให้ผู้ใช้แนบลายเซ็นไปกับโพสต์ของพวกเขา',
'User has posted label'				=>	'ผู้ใช้ได้ฌพสต์ก่อนหน้านี้',
'User has posted help'				=>	'คุณลักษณะนี้แสดงจุดหน้าหัวข้อใน viewforum.php ในกรณีที่ผู้ใช้ที่เข้าสู่ระบบในปัจจุบันได้โพสต์ในหัวข้อนั้นก่อนหน้านี้ ปิดใช้งานถ้าคุณพบการโหลดเซิร์ฟเวอร์สูง',
'Topic views label'					=>	'มุมมองหัวข้อ',
'Topic views help'					=>	'ติดตามจํานวนการดูที่หัวข้อมี ปิดใช้งานถ้าคุณกําลังประสบกับการโหลดเซิร์ฟเวอร์สูงในฟอรั่มไม่ว่าง',
'Quick jump label'					=>	'ข้ามอย่างรวดเร็ว',
'Quick jump help'					=>	'เปิดใช้งานรายการข้ามอย่างรวดเร็ว (ข้ามไปยังฟอรั่ม)',
'GZip label'						=>	'เอาต์พุต GZip',
'GZip help'							=>	'หากเปิดใช้งาน FluxBB จะ gzip เอาต์พุตที่ส่งไปยังเบราว์เซอร์ วิธีนี้จะช่วยลดการใช้แบนด์วิดท์ แต่ใช้ CPU อีกเล็กน้อย คุณลักษณะนี้ต้องการให้มีการกําหนดค่า PHP ด้วย zlib (--with-zlib) หมายเหตุ: หากคุณมีโมดูล Apache mod_gzip mod_deflateตั้งค่าให้บีบอัดสคริปต์ PHP คุณควรปิดใช้งานคุณสมบัตินี้',
'Search all label'					=>	'ค้นหาฟอรั่มทั้งหมด',
'Search all help'					=>	'เมื่อปิดใช้งานการค้นหาจะได้รับอนุญาตในฟอรัมเดียวเท่านั้นในแต่ละครั้ง ปิดใช้งานถ้าการโหลดเซิร์ฟเวอร์สูงเนื่องจากการค้นหามากเกินไป',
'Menu items label'					=>	'รายการเมนูเพิ่มเติม',
'Menu items help'					=>	'ด้วยการใส่การเชื่อมโยงหลายมิติ HTML ลงในกล่องข้อความนี้ รูปแบบสําหรับการเพิ่มการเชื่อมโยงใหม่คือ X = &lt;a href="URL"&gt;LINK&lt;/a&gt; โดยที่ X คือตําแหน่งที่ควรแทรกการเชื่อมโยง (เช่น 0 เพื่อแทรกที่จุดเริ่มต้น และ 2 เพื่อแทรกหลังจาก "รายการผู้ใช้") แยกรายการด้วยตัวแบ่งบรรทัด',

// Feeds section
'Feed subhead'						=>	'การรวบรวม',
'Default feed label'				=>	'ตัวดึงข้อมูลเริ่มต้น',
'Default feed help'					=>	'เลือกชนิดของตัวดึงข้อมูลการรวบรวมที่จะแสดง หมายเหตุ: การเลือกไม่มีจะไม่ปิดใช้งานฟีด ให้ซ่อนไว้ตามค่าเริ่มต้นเท่านั้น',
'None'								=>	'ไม่',
'RSS'								=>	'Rss',
'Atom'								=>	'อะตอม',
'Feed TTL label'					=>	'ระยะเวลาในแคชตัวดึงข้อมูล',
'Feed TTL help'						=>	'ตัวดึงข้อมูลสามารถแคชเพื่อลดการใช้ทรัพยากรของตัวดึงข้อมูลได้',
'No cache'							=>	'ไม่ต้องแคช',
'Minutes'							=>	'%d นาที',

// Reports section
'Reports subhead'					=>	'รายงาน',
'Reporting method label'			=>	'วิธีการรายงาน',
'Internal'							=>	'ภายใน',
'By e-mail'							=>	'อีเมล',
'Both'								=>	'ทั้ง',
'Reporting method help'				=>	'เลือกวิธีการสําหรับการจัดการหัวข้อ/ลงรายการบัญชีรายงาน คุณสามารถเลือกได้ว่าจะให้จัดการรายงานหัวข้อ/โพสต์โดยระบบรายงานภายใน',
'Mailing list label'				=>	'รายชื่อผู้รับจดหมาย',
'Mailing list help'					=>	'รายชื่อสมาชิกที่คั่นด้วยเครื่องหมายจุลภาค บุคคลในรายการนี้เป็นผู้รับรายงาน',

// Avatars section
'Avatars subhead'					=>	'อวตาร',
'Use avatars label'					=>	'ใช้อวตาร',
'Use avatars help'					=>	'เมื่อเปิดใช้งานผู้ใช้จะสามารถอัปโหลดอวตารซึ่งจะแสดงภายใต้ชื่อของพวกเขา',
'Upload directory label'			=>	'อัปโหลดไดเรกทอรี',
'Upload directory help'				=>	'ไดเรกทอรีอัปโหลดสําหรับอวตาร (สัมพันธ์กับไดเรกทอรีราก FluxBB) PHP ต้องมีสิทธิ์ในการเขียนไปยังไดเรกทอรีนี้',
'Max width label'					=>	'ความกว้างมากที่สุด',
'Max width help'					=>	'ความกว้างสูงสุดของอวตารที่อนุญาตเป็นพิกเซล (แนะนําให้ใช้ 60)',
'Max height label'					=>	'ความสูงสูงสุด',
'Max height help'					=>	'ความสูงสูงสุดที่อนุญาตของอวตารเป็นพิกเซล (แนะนําให้ใช้ 60)',
'Max size label'					=>	'ขนาดสูงสุด',
'Max size help'						=>	'ขนาดอวตารสูงสุดที่อนุญาตเป็นไบต์ (แนะนําให้ใช้ 10240)',

// E-mail section
'E-mail subhead'					=>	'อีเมล',
'Admin e-mail label'				=>	'อีเมลผู้ดูแลระบบ',
'Admin e-mail help'					=>	'ที่อยู่อีเมลของผู้ดูแลคณะกรรมการ',
'Webmaster e-mail label'			=>	'อีเมลสําหรับผู้ดูแลเว็บ',
'Webmaster e-mail help'				=>	'นี่คือที่อยู่ที่อีเมลทั้งหมดที่ส่งโดยยอร์ดจะได้รับการแก้ไข',
'Forum subscriptions label'			=>	'การสมัครสมาชิกฟอรัม',
'Forum subscriptions help'			=>	'ช่วยให้ผู้ใช้สามารถสมัครรับฟอรัม (รับอีเมลเมื่อมีคนสร้างหัวข้อใหม่)',
'Topic subscriptions label'			=>	'สมัครสมาชิกหัวข้อ',
'Topic subscriptions help'			=>	'ช่วยให้ผู้ใช้สามารถสมัครสมาชิกหัวข้อ (รับอีเมลเมื่อมีคนตอบกลับ)',
'SMTP address label'				=>	'ที่อยู่เซิร์ฟเวอร์ SMTP',
'SMTP address help'					=>	'ที่อยู่ของเซิร์ฟเวอร์ SMTP ภายนอกที่จะส่งอีเมลด้วย คุณสามารถระบุหมายเลขพอร์ตแบบกําหนดเองถ้าเซิร์ฟเวอร์ SMTP ไม่ทํางานบนพอร์ตเริ่มต้น 25 (ตัวอย่าง: จดหมาย.โฮสต์ของฉัน.com:3580)',
'SMTP username label'				=>	'ชื่อผู้ใช้ SMTP',
'SMTP username help'				=>	'ชื่อผู้ใช้สําหรับเซิร์ฟเวอร์ SMTP ป้อนชื่อผู้ใช้เฉพาะเมื่อเซิร์ฟเวอร์ SMTP ต้องการ (เซิร์ฟเวอร์ส่วนใหญ่ <strong>ไม่จําเป็นต้อง</strong> ยืนยัน)',
'SMTP password label'				=>	'รหัสผ่าน SMTP',
'SMTP change password help'			=>	'ตรวจสอบสิ่งนี้หากคุณต้องการเปลี่ยนหรือลบรหัสผ่านที่เก็บไว้ในปัจจุบัน',
'SMTP password help'				=>	'รหัสผ่านสําหรับเซิร์ฟเวอร์ SMTP ป้อนรหัสผ่านเฉพาะเมื่อเซิร์ฟเวอร์ SMTP ต้องการ (เซิร์ฟเวอร์ส่วนใหญ่ <strong>ไม่จําเป็นต้อง</strong> ยืนยัน) กรุณาใส่รหัสผ่านของคุณสองครั้งเพื่อยืนยัน',
'SMTP SSL label'					=>	'เข้ารหัส SMTP โดยใช้ SSL',
'SMTP SSL help'						=>	'เข้ารหัสการเชื่อมต่อกับเซิร์ฟเวอร์ SMTP โดยใช้ SSL ควรใช้เฉพาะเมื่อเซิร์ฟเวอร์ SMTP ของคุณต้องการและ PHP เวอร์ชันของคุณรองรับ SSL เท่านั้น',

// Registration Section
'Registration subhead'				=>	'ลง ทะเบียน',
'Allow new label'					=>	'อนุญาตให้มีการลงทะเบียนใหม่',
'Allow new help'					=>	'ควบคุมว่าบอร์ดนี้ยอมรับการลงทะเบียนใหม่หรือไม่ ปิดใช้งานเฉพาะในสถานการณ์พิเศษเท่านั้น',
'Verify label'						=>	'ตรวจสอบการลงทะเบียน',
'Verify help'						=>	'เมื่อเปิดใช้งานผู้ใช้จะถูกส่งอีเมลรหัสผ่านแบบสุ่มเมื่อลงทะเบียน จากนั้นพวกเขาสามารถเข้าสู่ระบบและเปลี่ยนรหัสผ่านในโปรไฟล์ของพวกเขาหากพวกเขาเห็นว่าเหมาะสม คุณสมบัตินี้ยังกําหนดให้ผู้ใช้ยืนยันที่อยู่อีเมลใหม่หากพวกเขาเลือกที่จะเปลี่ยนจากที่อยู่อีเมลที่ลงทะเบียนไว้ นี่เป็นวิธีที่มีประสิทธิภาพในการหลีกเลี่ยงการละเมิดการลงทะเบียนและตรวจสอบให้แน่ใจว่าผู้ใช้ทุกคนมีที่อยู่อีเมล "ถูกต้อง" ในโปรไฟล์ของพวกเขา',
'Report new label'					=>	'รายงานการลงทะเบียนใหม่',
'Report new help'					=>	'หากเปิดใช้งาน FluxBB จะแจ้งให้ผู้ใช้ทราบในรายชื่อผู้รับจดหมาย (ดูด้านบน) เมื่อผู้ใช้ใหม่ลงทะเบียนในฟอรัม',
'Use rules label'					=>	'กฎฟอรั่มผู้ใช้',
'Use rules help'					=>	'เมื่อเปิดใช้งานผู้ใช้จะต้องยอมรับชุดของกฎเมื่อลงทะเบียน (ป้อนข้อความด้านล่าง) กฎจะพร้อมใช้งานผ่านลิงก์ในตารางการนําทางที่ด้านบนของทุกหน้าเสมอ',
'Rules label'						=>	'ใส่กฎของคุณที่นี่',
'Rules help'						=>	'ที่นี่คุณสามารถป้อนกฎหรือรายละเอียดอื่นๆ ที่ผู้ใช้ต้องตรวจทานและยอมรับเมื่อทําการลงทะเบียน ถ้าคุณเปิดใช้งานกฎข้างต้น ข้อความนี้จะไม่ถูกแยกวิเคราะห์เหมือนโพสต์ปกติและอาจมี HTML',
'E-mail default label'				=>	'การตั้งค่าอีเมลเริ่มต้น',
'E-mail default help'				=>	'เลือกการตั้งค่าความเป็นส่วนตัวเริ่มต้นสําหรับการลงทะเบียนผู้ใช้ใหม่',
'Display e-mail label'				=>	'แสดงที่อยู่อีเมลให้กับผู้ใช้รายอื่น',
'Hide allow form label'				=>	'ซ่อนที่อยู่อีเมลแต่อนุญาตอีเมลของฟอร์ม',
'Hide both label'					=>	'ซ่อนที่อยู่อีเมลและไม่อนุญาตให้ส่งอีเมลแบบฟอร์ม',

// Announcement Section
'Announcement subhead'				=>	'ประกาศ',
'Display announcement label'		=>	'แสดงการประกาศ',
'Display announcement help'			=>	'เปิดใช้งานสิ่งนี้เพื่อแสดงข้อความด้านล่างในบอร์ด',
'Announcement message label'		=>	'ข้อความประกาศ',
'Announcement message help'			=>	'ข้อความนี้จะไม่ถูกแยกวิเคราะห์เหมือนโพสต์ปกติและอาจมี HTML',

// Maintenance Section
'Maintenance subhead'				=>	'บำรุง รักษา',
'Maintenance mode label'			=>	'โหมดการบํารุงรักษา',
'Maintenance mode help'				=>	'เมื่อเปิดใช้งาน บอร์ดจะพร้อมใช้งานสําหรับผู้ดูแลระบบเท่านั้น ควรใช้หากบอร์ดจําเป็นต้องนําลงชั่วคราวเพื่อการบํารุงรักษา <strong>คำ เตือน! อย่าออกจากระบบเมื่อบอร์ดอยู่ในโหมดการบํารุงรักษา</strong> คุณจะไม่สามารถเข้าสู่ระบบอีกครั้งได้',
'Maintenance message label'			=>	'ข้อความการบํารุงรักษา',
'Maintenance message help'			=>	'ข้อความที่จะแสดงต่อผู้ใช้เมื่อบอร์ดอยู่ในโหมดการบํารุงรักษา ถ้าปล่อยว่างไว้ จะมีการใช้ข้อความเริ่มต้น ข้อความนี้จะไม่ถูกแยกวิเคราะห์เหมือนโพสต์ปกติและอาจมี HTML',

);
