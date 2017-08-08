# NewMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_url** | **string** | URL replies and delivery reports to this message will be pushed to | [optional] 
**content** | **string** | Content of the message | [optional] 
**destination_number** | **string** | Destination number of the message | [optional] 
**delivery_report** | **bool** | Request a delivery report for this message | [optional] [default to false]
**format** | **string** | Format of message, SMS or TTS (Text To Speech). | [optional] 
**message_expiry_timestamp** | [**\DateTime**](\DateTime.md) | Date time after which the message expires and will not be sent | [optional] 
**metadata** | **object** | Metadata for the message specified as a set of key value pairs, each key can be up to 100 characters long and each value can be up to 256 characters long &#x60;&#x60;&#x60; {    \&quot;myKey\&quot;: \&quot;myValue\&quot;,    \&quot;anotherKey\&quot;: \&quot;anotherValue\&quot; } &#x60;&#x60;&#x60; | [optional] 
**scheduled** | [**\DateTime**](\DateTime.md) | Scheduled delivery date time of the message | [optional] 
**source_number** | **string** |  | [optional] 
**source_number_type** | **string** | Type of source address specified, this can be INTERNATIONAL, ALPHANUMERIC or SHORTCODE | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


