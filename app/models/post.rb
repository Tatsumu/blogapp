class Post < ActiveRecord::Base
	has_many :comments#commentとの関連付け　postには複数のcommentがつく
	validates :title, :description, presence: true#postのbodyとdescriptionが空だったらvalidate
end
