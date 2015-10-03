class Post < ActiveRecord::Base
	has_many :comments#commentと親子の関係にする　コメントは子
	validates :title, :description, presence: true#postのbodyとdescriptionが空だったらvalidate
end
