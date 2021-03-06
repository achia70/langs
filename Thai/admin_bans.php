<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'ไม่มีผู้ใช้ตามชื่อผู้ใช้ที่ลงทะเบียนไว้ หากคุณต้องการเพิ่มการแบนที่ไม่ได้ผูกติดอยู่กับชื่อผู้ใช้เฉพาะเพียงแค่ปล่อยให้ชื่อผู้ใช้ว่างเปล่า',
'No user ID message'		=>	'ไม่มีผู้ใช้ตาม ID ที่ลงทะเบียนไว้',
'User is admin message'		=>	'ผู้ใช้ %s เป็นผู้ดูแลระบบและไม่สามารถห้ามได้ หากคุณต้องการห้ามผู้ดูแลระบบคุณต้องลดระดับเขา / เธอก่อน',
'User is mod message'		=>	'ผู้ใช้ %s เป็นผู้ควบคุมและไม่สามารถห้ามได้ หากคุณต้องการห้ามผู้ควบคุมคุณต้องลดระดับเขา / เธอก่อน',
'Must enter message'		=>	'คุณต้องป้อนชื่อผู้ใช้ ที่อยู่ IP หรือที่อยู่อีเมล (อย่างน้อย)',
'Cannot ban guest message'	=>	'ผู้ใช้ที่เป็นแขกไม่สามารถถูกแบนได้',
'Invalid IP message'		=>	'คุณใส่ช่วง IP/IP ที่ไม่ถูกต้อง',
'Invalid e-mail message'	=>	'ที่อยู่อีเมล (เช่น user@domain.com) หรือโดเมนที่อยู่อีเมลบางส่วน (เช่น domain.com) ที่คุณป้อนไม่ถูกต้อง',
'Duplicate domain message'	=>	'โดเมน %s ถูกแบนแล้ว',
'Duplicate e-mail message'	=>	'ที่อยู่อีเมล %s ถูกแบนแล้ว',
'Invalid date message'		=>	'คุณใส่วันหมดอายุไม่ถูกต้อง',
'Invalid date reasons'		=>	'รูปแบบควรเป็น YYYY-MM-DD และวันที่ต้องมีอย่างน้อยหนึ่งวันในอนาคต',
'Ban added redirect'		=>	'เพิ่มการแบนแล้ว กําลังเปลี่ยนเส้นทาง ...' ,
'Ban edited redirect'		=>	'แบนแก้ไขแล้ว กําลังเปลี่ยนเส้นทาง ...',
'Ban removed redirect'		=>	'การแบนถูกนําออก กําลังเปลี่ยนเส้นทาง ...',

'New ban head'				=>	'การแบนใหม่',
'Add ban subhead'			=>	'เพิ่มการแบน',
'Username label'			=>	'ชื่อ',
'Username help'				=>	'ชื่อผู้ใช้ที่จะห้าม (ไม่คำนึงถึงตัวพิมพ์เล็กและใหญ่)',
'Username advanced help'	=>	'ชื่อผู้ใช้ที่จะห้าม (ไม่คำนึงถึงตัวพิมพ์เล็กและใหญ่) หน้าถัดไปจะให้คุณป้อน IP และอีเมลที่กําหนดเอง หากคุณต้องการแบนช่วง IP / IP ที่เฉพาะเจาะจงหรืออีเมลเพียงแค่ปล่อยให้ว่างเปล่า',

'Ban search head'			=>	'ค้นหาการแบน',
'Ban search subhead'		=>	'ป้อนเกณฑ์การค้นหา',
'Ban search info'			=>	'ค้นหาการแบนในฐานข้อมูล คุณสามารถป้อนคําหนึ่งคําหรือมากกว่าที่จะค้นหาได้ สัญลักษณ์ตัวแทนในรูปแบบของเครื่องหมายดอกจัน (*) ได้รับการยอมรับ เมื่อต้องการแสดงการแบนทั้งหมด ให้ปล่อยเขตข้อมูลทั้งหมดว่างไว้',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'ข้อความ',
'Expire after label'		=>	'หมดอายุหลังจาก',
'Expire before label'		=>	'หมดอายุก่อน',
'Order by label'			=>	'สั่งโดย',
'Order by username'			=>	'ชื่อ',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'อีเมล',
'Order by expire'			=>	'วันหมดอายุ',
'Ascending'					=>	'จากน้อยไปหามาก',
'Descending'				=>	'จากมากไปหาน้อย',
'Submit search'				=>	'ส่งการค้นหา',

'E-mail label'				=>	'อีเมล',
'E-mail help'				=>	'โดเมนอีเมลหรืออีเมลที่คุณต้องการแบน (เช่น someone@somewhere.comหรือsomewhere.com) ดู "อนุญาตที่อยู่อีเมลที่ถูกแบน" ในสิทธิ์สําหรับข้อมูลเพิ่มเติม',
'IP label'					=>	'ที่อยู่ IP/ช่วง IP',
'IP help'					=>	'ที่อยู่ IP หรือช่วง IP ที่คุณต้องการห้าม (เช่น 150.11.110.1 หรือ 150.11.110) แยกที่อยู่ด้วยช่องว่าง ถ้ามีการป้อน IP แล้ว เป็น IP ที่รู้จักล่าสุดของผู้ใช้รายนี้ในฐานข้อมูล',
'IP help link'				=>	'คลิก %s เพื่อดูสถิติ IP สําหรับผู้ใช้รายนี้',
'Ban advanced head'			=>	'การตั้งค่าขั้นสูงของแบน',
'Ban advanced subhead'		=>	'การแบนเสริมด้วย IP และอีเมล',
'Ban message label'			=>	'ข้อความแบน',
'Ban message help'			=>	'ข้อความที่จะแสดงต่อผู้ใช้ที่ถูกแบนเมื่อเขา / เธอเยี่ยมชมบอร์ด',
'Message expiry subhead'	=>	'แบนข้อความและวันหมดอายุ',
'Ban IP range info'			=>	'คุณควรระมัดระวังอย่างมากเมื่อแบนช่วง IP เนื่องจากความเป็นไปได้ของผู้ใช้หลายคนที่ตรงกับ IP บางส่วนเดียวกัน',
'Expire date label'			=>	'วันหมดอายุ',
'Expire date help'			=>	'วันที่ควรเอาการแบนนี้ออกโดยอัตโนมัติ (รูปแบบ: yyyy-mm-dd) กด F1 สําหรับ <a0> กด F1 </a0>',

'Results head'				=>	'ผลลัพธ์การค้นหา',
'Results username head'		=>	'ชื่อ',
'Results e-mail head'		=>	'อีเมล',
'Results IP address head'	=>	'ช่วง IP/IP',
'Results expire head'		=>	'หมด อายุ',
'Results message head'		=>	'ข้อความ',
'Results banned by head'	=>	'แบนโดย',
'Results actions head'		=>	'การกระทํา',
'No match'					=>	'ไม่ตรงกัน',
'Unknown'					=>	'ไม่ทราบ',

);
