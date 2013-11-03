INSERT INTO `vital`.`topic_type` (  
  `TOPIC_TYPE_NAME`,
  `TOPIC_TYPE_DESC`,
  `TOPIC_DISPLAY_NAME`
) 
VALUES
  (    
    'OUR_SERVICES',
    'All entries about our services topics',
	'Our services'
	),
  ( 'ABOUT_US',
    'About ourselve',
	'About us'
	),
  ('OUR_PARTNERS',
	'About our partners topics',
	'Our partners',
	),
  ('CONTACT_US',
	'Contact us topics',
	'Contact us'
	);
	
	
	
INSERT INTO `vital`.`content_topic` (
  `TITLE`,
  `SHORT_DESC`,
  `LONG_DESC`,
  `TOPIC_TYPE_ID`
) 
VALUES
  (
    'BRANDING',
    'We believe that a logo...',
    'We believe that a logo is the heart and soul of any company’s corporate identity so we are dedicated to make sure that you will have a unique and creative logo that will standout from the rest.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  ),
 (
    'GRAPHIC DESIGN',
    'Your marketing collaterals represents...',
    'Your marketing collaterals represents your company and speaks for you when you are not around. Hence, we’re always ready to pool our creative juices together to ensure that your professionalism and products quality are well represented in you marketing collaterals. From brochures to catalogues, banners to billboards, we do it all.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  ),
  (
    'EVENTS MANAGEMENT',
    'Organising a corporate event ...',
    'Organising a corporate event can be a daunting task so let our dedicated team work together with you from conceptualisation to completion. We will work together to organise a successful and memorable event that you and your participants will talk about for a long time afterwards.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  ),
 (
    'WEBSITE DESIGN',
    'Web exposure has become a...',
    'Web exposure has become a major sales and marketing strategy for all companies, big and small. Let our team work with you to design a creative website that would bring forth your intended message but yet remain user-friendly and easy to navigate. We will also create a built-in management system that would allow you to analyse the site’s viewership and to be able to update information with ease. Our IT consultants will also assist in search engine optimisation (SEO) for your website.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  ),
 (
    'PRINT MANAGEMENT',
    'We believe that a logo...',
    'Allow us the opportunity to lighten you load, Let our experienced professionals manage your print jobs since poorly produced collaterals would do injustice to the design and as a result, negatively affect your corporate image. Our team will take care of your job from final artwork to print check, quality control and finally to the delivery of the finished products. We will ensure your expectations on quality and deadlines will be fully met. We will even assist you with minor corrects or touchups on the artwork before print, unless we are already designing your collaterals.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  ),
 (
    'PUBLIC RELATIONS',
    'In order to provide...',
    'In order to provide a more comprehensive and complete service, we have teamed up with a group of public relations professionals with both international and local experience so that we can work with you to meet your communications objectives. Contact and connect with us so that we can work together to connect with your partners and customers.',
    (SELECT topic_type.`TOPIC_TYPE_ID` FROM topic_type WHERE topic_type_name = 'OUR_SERVICES')
  );