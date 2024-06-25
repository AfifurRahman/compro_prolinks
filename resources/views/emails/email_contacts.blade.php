@include('emails.layout.email_header')
<table role="presentation" class="main">
    <tr>
      <td class="wrapper">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>
                  <hr class="hr-custom">
                  Hi info@protemus.co.id, here new contacts<br><br>
                  <table>
                      <tr>
                        <td width="150"><b>Name</b></td>
                        <td width="10"><b>:</b></td>
                        <td>{{ $details['nama_depan'] }}</td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td><b>:</b></td>
                        <td>{{ $details['email'] }}</td>
                      </tr>
                      <tr>
                        <td><b>Contact Number</b></td>
                        <td><b>:</b></td>
                        <td>{{ $details['no_hp'] }}</td>
                      </tr>
                      <tr>
                        <td><b>Message</b></td>
                        <td><b>:</b></td>
                        <td>{{ $details['pesan'] }}</td>
                      </tr>
                    </table>
                    <hr class="hr-custom">
                </td>
            </tr>
          </table>
      </td>
  </tr>
</table>
@include('emails.layout.email_footer')