   #!/bin/bash

   # Set email subject
   subject="Subject: Pengajuan KGB Badan Pusat Statistik Kota Lhokseumawe"

   # Set email body
   body="Selamat siang bpk/ibu, Selamat pengajuan KGB sudah dapat dilakukan. Harap hubungi pihak Tata Usaha untuk informasi lebih lanjut"

   # Retrieve email addresses and KGB dates from both tables using JOIN query
   while read -r email tanggalKGB; do
       # Calculate the reminder date (1 month before KGB date)
       reminderDate=$(date -d "$tanggalKGB -1 month" +%Y-%m-%d)

       # Format the reminder date to YYYY-MM-DD
       reminderDate=$(date -d "$reminderDate" +%Y-%m-%d)

       # Create a cronjob entry
       (crontab -l; echo "0 0 $reminderDate * * ./send_email.sh") | crontab -

       echo "Cronjob created for email: $email on date: $reminderDate"
   done < <(mysql -u Email -p Password -D db_sigaber -se "SELECT p.Email, l.TanggalKGB FROM tb_pegawai p JOIN tb_listkgb l ON p.NO = l.NO;")