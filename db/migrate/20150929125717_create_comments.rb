class CreateComments < ActiveRecord::Migration
  def change
    create_table :comments do |t|
      t.string :body
      t.boolean :done, default: false #toggleでtrue,falseを切り替える　最初をfalseにしておく
      t.references :post, index: true, foreign_key: true

      t.timestamps null: false
    end
  end
end
