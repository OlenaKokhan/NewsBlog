<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property integer $id
 * @property string $title
 * @property string $text
*/
class News extends CActiveRecord
{
    public $categories;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title, text', 'required'),
			array('title', 'length', 'max'=>255),
			array('id, title, text', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'categories'=>array(self::MANY_MANY, 'Category',
                'b_news_to_category(news_id, category_id)'),
            'comments'=>array(self::HAS_MANY, 'Comment', 'news_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'text' => 'Text',
            'categories' => 'Categories'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * Returns all news.
     * @return array
     */
    public static function all()
    {
        return CHtml::listData(self::model()->findAll(), 'id', 'title');
    }

    public static function allNews()
    {
        $criteria = new CDbCriteria;
        return new CActiveDataProvider('News', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>2
            )
        ));
    }

    public static function findAllByCategoryId($category_id)
    {
        $newsArray = NewsToCategory::newsArray($category_id);
        $news = array();
        foreach ($newsArray as $item){
            $news[] = $item->news_id;
        }
        $criteria = new CDbCriteria;
        $criteria->addInCondition('id', $news);
        return new CActiveDataProvider('News', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>2
            )
        ));
    }
}
