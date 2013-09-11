set :user, "production_user"
server "ec2-54-242-6-112.compute-1.amazonaws.com", :app, :web
ssh_options[:keys] = ["#{ENV['HOME']}/.aws_key_cdrapp"] 