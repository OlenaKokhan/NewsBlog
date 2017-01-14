<?php

/**
 * This is the model class for table "{{news_to_category}}".
 *
 * The followings are the available columns in table '{{news_to_category}}':
 * @property integer $news_id
 * @property integer $category_id
 */
class NewsToCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news_to_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_id, category_id', 'required'),
			array('news_id, category_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, category_id', 'safe', 'on'=>'search'),
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
            'categories'=>array(self::BELONGS_TO, 'Category', 'category_id'),
            'news'=>array(self::BELONGS_TO, 'News', 'news_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'news_id' => 'News',
			'category_id' => 'Category',
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
		$criteria=new CDbCriteria;
		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('category_id',$this->category_id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsToCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function newsArray($category_id)
    {
        $categories = self::model()->findAllByAttributes(array('category_id'=>$category_id));
        return $categories;
    }
}
