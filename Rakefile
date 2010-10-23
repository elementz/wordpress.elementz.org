namespace :wp do
  desc 'sync remote db'
  task :sync_db do
    puts 'dumping remote db...'
    system %Q{mysqldump -u elementz -pelementz33 -h elementz-db.26webs.com elementz > elementz_db.sql}
    puts 'importing data...'
    system %{cat elementz_db.sql | mysql -u root elementz}
    system %Q{rm elementz_db.sql}
    puts 'done!'
  end
end
