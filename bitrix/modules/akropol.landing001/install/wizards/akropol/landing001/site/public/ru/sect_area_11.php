    <section id="contact" class="caption-margin">
      <div class="container">
        
          <!-- SECTION TITLE -->
          <h2 class="anim-fade-down">
            
            <!-- TITLE -->
            ����� �������� �����<br/>
            
            <!-- SUBTITLE -->
            <span>�������� ���</span>
            
          </h2>
          
          <!-- CONTACT FORM -->
          <?$APPLICATION->IncludeComponent("akropol:feedback.main", "feedback", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"FORM_TITLE" => "",	// ��������� �����
		"FORM_TITLE_TYPE" => "H2",	// ��� ���������
		"FORM_TITLE_SIZE" => "5",	// �������� ���������
		"USE_CAPTCHA" => "N",	// ������������ ������ �� �������������� ��������� (CAPTCHA) ��� ���������������� �������������
		"OK_TEXT" => "�������, ���� ��������� �������.",	// ���������, ��������� ������������ ����� ��������
		"EMAIL_TO" => "#MAIL#",	// E-mail, �� ������� ����� ���������� ������
		"USED_FIELDS" => array(	// �������� ����
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
			3 => "MESSAGE",
		),
		"REQUIRED_FIELDS" => array(	// ������������ ���� ��� ����������
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(	// �������� ������� ��� �������� ������
			0 => "#EMAIL_TEMPLATE_ID#",
		),
		"USE_IN_COMPONENT" => "Y",	// ������������ ������ ������� ���������� (��� ���������� �������)
		"MESSAGE_HIDTH" => "10",	// ������ ���� "���������" (����� �����)
		"BUTTON_MESSAGE" => "��������",	// ����� ������ ��������
		"PROPERTY_CODE_BUTTON_COLOR" => "btn-primary",	// ���� �������
		"NAME_HINT_TITLE" => "���� ���",	// ��������� ��� ���� ���
		"NAME_HINT_TEXT" => "���� ���",	// ��������� � ���� ���
		"EMAIL_HINT_TITLE" => "��� e-mail",	// ��������� � ���� email
		"EMAIL_HINT_TEXT" => "email",	// ��������� � ���� email
		"PHONE_HINT_TITLE" => "��� �������",	// ��������� � ���� �������
		"PHONE_HINT_TEXT" => "+7(926)123-45-67",	// ��������� � ���� �������
		"MESSAGE_HINT_TITLE" => "���������",	// ��������� � ���� ���������
	),
	false
);?>
      </div>