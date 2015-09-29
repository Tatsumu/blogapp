class Post < ActiveRecord::Base
	has_many :posts
	validates :title, :description, presence: true
end
