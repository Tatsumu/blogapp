class Post < ActiveRecord::Base
	has_many :comments#commentとの関連付け　postには複数のcommentがつく
	validates :body, :description, presence: true#postのbodyとdescriptionが空だったらvalidate
end
