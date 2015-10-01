class Post < ActiveRecord::Base
	has_many :comments
	validates :body, :description, presence: true
end
