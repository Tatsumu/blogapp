class Comment < ActiveRecord::Base
  belongs_to :post#postとの関連付け
  validates :body, presence: true#commentのbodyが空だったらvalidateする
end
